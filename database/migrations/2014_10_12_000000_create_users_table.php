<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('date_of_birth');
            $table->string('address');
            $table->string('mobile');
            $table->string('profile_picture');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('reg_type', ['Teacher', 'Student', 'Staff', 'Super Admin']);
            $table->string('designation')->nullable();
            $table->integer('student_id')->nullable();
            $table->string('student_session')->nullable();
            $table->boolean('approval')->default(0)->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
