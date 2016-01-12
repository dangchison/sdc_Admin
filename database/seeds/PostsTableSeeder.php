<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::statement("TRUNCATE TABLE sdc_posts");
		$arr = array();
		for( $i = 0; $i <= 2; $i++ ){			
			$arr[$i]['post_title'] = "Neque porro quisquam est qui dolo rem ipsum quio $i";
			$arr[$i]['post_slug'] = str_slug("Neque porro quisquam est qui dolo rem ipsum quio $i","_");
			$arr[$i]['post_description'] = "Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci.";
			$arr[$i]['post_content'] = "Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci.<br>Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci.<br>Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci.";
			$arr[$i]['sdc_user_id'] = $i+1;
			$arr[$i]['created_at'] = \Carbon\Carbon::now()->toDateTimeString();
			$arr[$i]['updated_at'] = \Carbon\Carbon::now()->toDateTimeString();
		}
		
		DB::table('sdc_posts')->insert( $arr );
    }
}
