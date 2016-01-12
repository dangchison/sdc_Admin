<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSdcPostRecommends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('sdc_post_recommends');
        Schema::create('sdc_post_recommends', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('sdc_post_id')->notnull();
            $table->string('post_recommends_id')->notnull();
            $table->string('post_title')->notnull();
            $table->string('post_description')->notnull();
            $table->string('post_image_small');
            $table->integer('sdc_user_id')->notnull();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sdc_post_recommends');
    }
}
