<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number_pp');
            $table->integer('tab_number');
            $table->string('sex');
            $table->string('full_name');
            $table->string('position');
            $table->json('marks');
            $table->integer('total');
            $table->integer('overtime');
            $table->integer('nightly');
            $table->integer('evening');
            $table->integer('weekend');
            $table->integer('holiday');

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
        Schema::dropIfExists('working_hours');
    }
}
