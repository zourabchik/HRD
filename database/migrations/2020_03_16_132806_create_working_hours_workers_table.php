<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingHoursWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_hours_workers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('working_hour_id');
            $table->integer('number_pp');
            $table->integer('tab_number');
            $table->string('sex');
            $table->string('full_name');
            $table->string('position');
            $table->string('1');
            $table->string('2');
            $table->string('3');
            $table->string('4');
            $table->string('5');
            $table->string('6');
            $table->string('7');
            $table->string('8');
            $table->string('9');
            $table->string('10');
            $table->string('11');
            $table->string('12');
            $table->string('13');
            $table->string('14');
            $table->string('15');
            $table->string('16');
            $table->string('17');
            $table->string('18');
            $table->string('19');
            $table->string('20');
            $table->string('21');
            $table->string('22');
            $table->string('23');
            $table->string('24');
            $table->string('25');
            $table->string('26');
            $table->string('27');
            $table->string('28');
            $table->string('29');
            $table->string('30');
            $table->string('31');
            $table->timestamps();

            $table->foreign('working_hour_id')->references('id')->on('working_hours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('working_hours_workers');
    }
}
