<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSdcPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('sdc_posts');
        Schema::create('sdc_posts', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('post_title');
            $table->string('post_slug');
            $table->string('post_description')->nullable();
            $table->text('post_content');
            $table->string('post_image_small');
            $table->string('post_image_large');
            $table->integer('post_published')->default(0);
            $table->integer('sdc_user_id')->notnull();
            $table->timestamps();
            $table->softDeletes();
        });
        DB::statement(" ALTER TABLE sdc_posts ADD FULLTEXT search_posts (post_title,post_description) ");
        DB::statement(" ALTER TABLE sdc_posts MODIFY post_published BIT");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sdc_posts');
    }
}
