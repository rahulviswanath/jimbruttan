<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesOfficialDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_official_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->string('pan_no');
            $table->date('join_date');
            $table->date('conformation_date');
            $table->integer('probation_period');
            $table->integer('notice_period');
            $table->integer('department')->references('id')->on('master_departments');
            $table->integer('designation')->references('id')->on('master_designations');
            $table->integer('grade')->references('id')->on('master_grade');
            $table->integer('location')->references('id')->on('company');
            $table->enum('attendance_status',['CONFIRMED','CONTRACT','PROBATION','TRAINEE']);
            $table->string('reporting_manager')->references('employee_id')->on('employees');
            $table->timestamps();
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
        Schema::dropIfExists('employees_official_details');
    }
}
