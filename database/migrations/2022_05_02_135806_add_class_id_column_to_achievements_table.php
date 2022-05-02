<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClassIdColumnToAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('achievements', function (Blueprint $table) {
            $table->string('approved_by')->nullable()->after('is_approved');
            $table->bigInteger('class_id')->after('student_id')->references('id')->on('classes')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('achievements', function (Blueprint $table) {
            $table->dropColumn('approved_by');
            $table->dropColumn('class_id');
        });
    }
}
