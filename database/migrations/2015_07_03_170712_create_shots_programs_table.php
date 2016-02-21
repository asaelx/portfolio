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
            $table->unsignedInteger('shot_id');
            $table->unsignedInteger('program_id');
            $table->nullableTimestamps();

        });

        Schema::table('shots_programs', function (Blueprint $table) {
            $table->foreign('shot_id')->references('id')->on('shots');
            $table->foreign('program_id')->references('id')->on('programs');
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
            $table->dropForeign('shots_programs_shot_id_foreign');
            $table->dropForeign('shots_programs_program_id_foreign');
        });

        Schema::drop('shots_programs');
    }
}
