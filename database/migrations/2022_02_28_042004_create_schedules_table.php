<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules_year', function (Blueprint $table) {
            $table->id();
            $table->string('course_year');
            $table->timestamps();
        });
        Schema::create('schedules_semester', function (Blueprint $table) {
            $table->id();
            $table->integer('course_year_id');
            $table->string('course_semester');
            $table->timestamps();
        });
        Schema::create('schedules_code', function (Blueprint $table) {
            $table->id();
            $table->integer('course_year_id');
            $table->integer('course_semester_id');
            $table->string('course_code');
            $table->timestamps();
        });
        Schema::create('schedules_title', function (Blueprint $table) {
            $table->id();
            $table->integer('course_year_id');
            $table->integer('course_semester_id');
            $table->string('course_code');
            $table->string('course_title');
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
        Schema::dropIfExists('schedules');
    }
}
