<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePermisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permision', function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->foreign('role_id', 'fk_role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->unsignedInteger('permision_id');
            $table->foreign('permision_id', 'fk_permision_id')->references('id')->on('permisions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permision');
    }
}
