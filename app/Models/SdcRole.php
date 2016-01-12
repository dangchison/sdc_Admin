<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SdcRole extends Model
{
   /**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'sdc_roles';

	/**
	 * Relationships: One To Many
	 * sdc_roles vs sdc_users
	 * @return One To Many
	 */
	public function sdcUsers(){
		return $this->hasMany('App\Models\SdcUser');
	}
}
