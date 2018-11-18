<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesPersonalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_personal_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->date('dob');
            $table->string('blood_group',5);
            $table->string('father_name',75);
            $table->enum('married_status',['SINGLE','MARRIED','SEPARATED','WIDOWED']);
            $table->date('marriage_date');
            $table->smallInteger('nationality')->references('id')->on('countries');
            $table->string('place_of_birth',20);
            $table->string('personal_email',100);
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
        Schema::dropIfExists('employees_personal_info');
    }
}
