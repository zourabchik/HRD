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
            $table->string('full_name');
            $table->string('sex');
            $table->string('residence_permit');
            $table->string('passport');
            $table->string('id_code');
            $table->string('place_of_residence');
            $table->string('course');
            $table->string('learning_conditions');
            $table->string('military_certificate');
            $table->string('secondary_education_certificate');
            $table->string('school_report_card');
            $table->string('training_contract');
            $table->timestamp('enrollment_at');
            $table->timestamp('graduation_at');
            $table->timestamp('deduction_at');
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
