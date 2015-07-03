<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShotsProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shots_programs', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('shot');
            $table->unsignedInteger('program');
            $table->timestamps();

        });

        Schema::table('shots_programs', function (Blueprint $table) {
            $table->foreign('shot')->references('id')->on('shots');
            $table->foreign('program')->references('id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shots_programs', function (Blueprint $table) {
            $table->dropForeign('shots_programs_shot_foreign');
            $table->dropForeign('shots_programs_program_foreign');
        });

        Schema::drop('shots_programs');
    }
}
