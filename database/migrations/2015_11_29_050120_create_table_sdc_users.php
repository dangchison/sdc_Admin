<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSdcUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('sdc_users');
        Schema::create('sdc_users', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('display_name',100)->nullable();
            $table->string('address')->nullable();
            $table->date('birthday')->nullable();
            $table->binary('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('avatar_small')->nullable();
            $table->string('avatar_large')->nullable();
            $table->string('status')->nullable();
            $table->string('description')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('skype_id')->nullable();
            $table->string('user_slug');
            $table->integer('user_published')->default(0);
            $table->integer('sdc_role_id')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        DB::statement(" ALTER TABLE sdc_users ADD FULLTEXT search_users (email,display_name,address,phone,status,description) ");
        DB::statement(" ALTER TABLE sdc_users MODIFY gender BIT");
        DB::statement(" ALTER TABLE sdc_users MODIFY user_published BIT");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sdc_users', function($table) {
            $table->dropIndex('search_users');
        });

        Schema::drop('sdc_users');
    }
}
