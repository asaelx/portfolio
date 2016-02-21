<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shots', function (Blueprint $table) {

            $table->increments('id');
            $table->string('slug');
            $table->string('title_sp');
            $table->string('title_en');
            $table->text('content_sp');
            $table->text('content_en');
            $table->string('image_big');
            $table->string('image_small');
            $table->unsignedInteger('tag');
            $table->nullableTimestamps();

        });

        Schema::table('shots', function (Blueprint $table) {
            $table->foreign('tag')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shots', function (Blueprint $table) {
            $table->dropForeign('shots_tag_foreign');
        });

        Schema::drop('shots');
    }
}
