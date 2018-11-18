<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesPassportDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_passport_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->string('name',250);
            $table->string('sur_name',250);
            $table->string('middle_name',250);
            $table->text('address_1');
            $table->text('address_2');
            $table->smallInteger('country')->references('id')->on('master_countries');
            $table->enum('type', ['DIPLOMATIC', 'HAJJ', 'OFFICIAL','REGULAR']);
            $table->text('issued_address');
            $table->date('issued_date');
            $table->date('valid_till');
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
        Schema::dropIfExists('employees_passport_details');
    }
}
