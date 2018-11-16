<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesFamilyDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_family_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->string('name',250);
            $table->date('dob');
            $table->enum('gender', ['MALE', 'FEMALE', 'OTHERS']);
            $table->string('relation',50);
            $table->text('remarks');
            $table->timestamps();
            $table->primary('id');
            $table->foreign('employee_id')->references('employee_id')->on('employees')->onDelete('cascade');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees_family_details');
    }
}
