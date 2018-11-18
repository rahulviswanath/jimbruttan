<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesSalaryDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_salary_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->enum('payment_type',['CASH','BANK_TRANSFER','CHEQUE','DD']);
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
        Schema::dropIfExists('employees_salary_details');
    }
}
