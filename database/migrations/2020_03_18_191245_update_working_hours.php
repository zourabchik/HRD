<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateWorkingHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('working_hours', function (Blueprint $table) {
            $table->dropColumn('number_pp');
            $table->dropColumn('tab_number');
            $table->dropColumn('sex');
            $table->dropColumn('full_name');
            $table->dropColumn('position');
            $table->dropColumn('marks');
            $table->dropColumn('total');
            $table->dropColumn('overtime');
            $table->dropColumn('nightly');
            $table->dropColumn('evening');
            $table->dropColumn('weekend');
            $table->dropColumn('holiday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('working_hours', function (Blueprint $table) {
            
        });
    }
}
