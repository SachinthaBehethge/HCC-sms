<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('index_no')->unique();
            $table->unsignedBigInteger('student_no')->unique();
            $table->string('email')->unique();
            $table->string('fullname');
            $table->string('name_with_ini');
            $table->string('address');
            $table->string('dob');
            $table->string('nationality');
            $table->string('nic');
            $table->string('special_needs');
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('gardian_name');
            $table->string('gardian_email') ->unique();
            $table->string('way_of_coming');
            $table->string('distance');
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
        Schema::dropIfExists('students');
    }
}
