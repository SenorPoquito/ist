<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grades_id')->unsigned()->default(0);
			      $table->foreign('grades_id')->references('id')->on('grades');
            $table->integer('schools_id')->unsigned()->default(0);
			      $table->foreign('schools_id')->references('id')->on('schools');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grades_schools');
    }
}
