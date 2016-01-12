<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Auth;

class SdcUser extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract{
   use Authenticatable, Authorizable, CanResetPassword;

	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'sdc_users';

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	// protected $fillable = ['name', 'email', 'password'];

	/**
	* The attributes excluded from the model's JSON form.
	*
	* @var array
	*/
	protected $hidden = ['password', 'remember_token'];

	/**
	 * Relationships: One To Many
	 * sdc_roles vs sdc_users
	 * @return One To Many
	 */
	public function sdcRole(){
		return $this->belongsTo("App\Models\SdcRole");
	}

	public function sdcPosts(){
		return $this->hasMany("App\Models\SdcPost");
	}

	public function getAllPaginate($character,$number){

		if( $character == "all" ){
			$users = new SdcUser;
		}else{
			$users = SdcUser::where('display_name','LIKE',"$character%");
		}
		$users = $users->where('id','<>',Auth::user()->id)->paginate($number);

		foreach ( $users as $key => $user ){
			switch($user->sdc_role_id){
				case 1: $user->sdc_role_id = "Administrator"; break;
				case 2: $user->sdc_role_id = "Sub Administrator"; break;
				default: break;
			}
		}

		return $users;
	}

	public function getFirstView($user_slug){
		$user = SdcUser::whereUser_slug($user_slug)->with(['sdcPosts' => function($query){
					$query->select('post_title','post_slug','post_image_small','sdc_user_id','updated_at')->get();
				}])->first();
		return $user;
	}

	public function getFirstEdit($user_slug){
		$user = SdcUser::whereUser_slug($user_slug)->first();
		return $user;
	}
}
