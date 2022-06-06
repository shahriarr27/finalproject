<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('schedules2', function (Blueprint $table) {
            $table->id();
            $table->string('course_year');
            $table->string('course_semester');
            $table->string('course_code');
            $table->string('course_title');
            $table->string('schedule_day');
            $table->time('startTime');
            $table->time('endTime');
            $table->enum('schedule_room', ['401', '402', '411', '412', '413', 'l01', 'l02']);
            $table->rememberToken();
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
        Schema::dropIfExists('schedules2');
    }
}
