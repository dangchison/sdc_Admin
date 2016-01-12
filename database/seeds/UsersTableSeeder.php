<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("TRUNCATE TABLE sdc_users");
   	DB::table('sdc_users')->insert(
         [
            [
               'email' => "admin@yopmail.com",
               'password' => bcrypt('123456'),
               'display_name' => "Administrator",
               'address' => "13th Gate Haunted House",
               'birthday' => date("Y-m-d",time()),
               'phone' => "0966019009",
               'avatar_small' => "images/photos/nophoto.png",
               'avatar_large' => "images/photos/nophoto.png",
               'facebook_id' => "152595292913",
               'google_id' => "107011284316911147618",
               'twitter_id' => "50268904",
               'skype_id' => "kphamcao",
               'user_slug' => str_slug("administrator","_"),
               'user_published' => 1,
               'sdc_role_id' => 1,
               'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
               'email' => "subadmin@yopmail.com",
               'password' => bcrypt('123456'),
               'display_name' => "Administrator 1",
               'address' => "13th Gate Haunted House",
               'birthday' => date("Y-m-d",time()),
               'phone' => "0966019009",
               'avatar_small' => "images/photos/nophoto.png",
               'avatar_large' => "images/photos/nophoto.png",
               'facebook_id' => "147815308904451",
               'google_id' => "101331137362388057020",
               'twitter_id' => "7319162",
               'skype_id' => "huynh.diep0708",
               'user_slug' => str_slug("Administrator 1","_"),
               'user_published' => 0,
               'sdc_role_id' => 2,
               'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
               'email' => "admin1@yopmail.com",
               'password' => bcrypt('123456'),
               'display_name' => "Administrator 2",
               'address' => "13th Gate Haunted House",
               'birthday' => date("Y-m-d",time()),
               'phone' => "0966019009",
               'avatar_small' => "images/photos/nophoto.png",
               'avatar_large' => "images/photos/nophoto.png",
               'facebook_id' => "152595292913",
               'google_id' => "107011284316911147618",
               'twitter_id' => "50268904",
               'skype_id' => "kphamcao",
               'user_slug' => str_slug("Administrator 2","_"),
               'user_published' => 0,
               'sdc_role_id' => 1,
               'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
               'email' => "subadmin1@yopmail.com",
               'password' => bcrypt('123456'),
               'display_name' => "Administrator 3",
               'address' => "13th Gate Haunted House",
               'birthday' => date("Y-m-d",time()),
               'phone' => "0966019009",
               'avatar_small' => "images/photos/nophoto.png",
               'avatar_large' => "images/photos/nophoto.png",
               'facebook_id' => "147815308904451",
               'google_id' => "101331137362388057020",
               'twitter_id' => "7319162",
               'skype_id' => "huynh.diep0708",
               'user_slug' => str_slug("Administrator 3","_"),
               'user_published' => 0,
               'sdc_role_id' => 2,
               'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]
         ]
      );
    }
}
