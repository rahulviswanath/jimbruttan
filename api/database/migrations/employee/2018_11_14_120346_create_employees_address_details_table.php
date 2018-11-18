<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesAddressDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_address_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->string('name',100);
            $table->text('address');
            $table->string('city',150);
            $table->string('state',150);
            $table->smallInteger('country')->references('id')->on('master_countries');
            $table->integer('zip_code');
            $table->string('phone_1',20);
            $table->string('phone_2',20);
            $table->string('fax',20);
            $table->string('mobile',20);
            $table->string('email',20);
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
        Schema::dropIfExists('employees_address_details');
    }
}
