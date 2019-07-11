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
        Schema::create('employees_bank_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->string('bank_name',200);
            $table->string('branch_name',300);
            $table->string('account_no',50);
            $table->string('ifsc_code',50);
            $table->enum('account_type',['SAVINGS','FIXED','CURRENT']);
            $table->string('name_as_bank',200);
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
        //
    }
}
