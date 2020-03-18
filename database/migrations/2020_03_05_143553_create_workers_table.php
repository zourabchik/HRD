<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('sex');
            $table->text('birth_certificate_of_the_childs');
            $table->string('employment_contract');
            $table->string('employment_order');
            $table->string('residence_permit');
            $table->string('place_of_residence');
            $table->string('position');
            $table->timestamp('attestation');
            $table->timestamp('specialty_accreditation');
            $table->string('contract');
            $table->string('employees_are_retired')->nullable();
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
        Schema::dropIfExists('workers');
    }
}
