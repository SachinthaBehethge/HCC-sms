<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermtestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termtests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('term_id')->references('id')->on('terms')->onDelete('CASCADE');
            $table->foreignId('subject_id')->references('id')->on('subjects')->onDelete('CASCADE');
            $table->string('test_date');
            $table->string('start_time');
            $table->string('end_time');
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
        Schema::dropIfExists('termtests');
    }
}
