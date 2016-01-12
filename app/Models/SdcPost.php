<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SdcPost extends Model{

   protected $table = 'sdc_posts';

	public function sdcUser(){
		return $this->belongsTo("App\Models\SdcUser");
	}

	public function getLists(){
		$posts = SdcPost::select(
						[
							"post_title",
							"post_slug",
							"post_description",
							"post_image_small",
							"sdc_user_id",
							"created_at"
						]
					)
					->with(["sdcUser" => function($query){
						$query->select(["display_name", "user_slug", "id"]);
					}])->paginate(10);
		return $posts;
	}

	public function getDetail($post_slug){
		$post = SdcPost::wherePost_slug($post_slug)->first();
		return $post;
	}

}
