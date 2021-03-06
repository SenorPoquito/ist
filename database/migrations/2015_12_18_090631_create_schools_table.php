<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('wards', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->default('');
        $table->string('slug')->default('');
        $table->datetime('created');
        $table->datetime('updated');
        $table->timestamps();
      });

      Schema::create('schools', function (Blueprint $table) {
        $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('name')->default('');
          $table->string('slug')->default('');
          $table->string('city')->default('Tokyo');
          $table->integer('ward_id')->unsigned();
          $table->string('genders')->default('Coed');
          $table->string('language')->default('English');
          $table->string('term')->default('September');
          $table->string('description')->default('');
          $table->string('programFees')->default('');
          $table->string('address')->default('');
          $table->string('otherFees')->default('');
          $table->datetime('created');
          $table->datetime('updated');
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
        Schema::drop('schools');
          Schema::drop('wards');
    }
}
