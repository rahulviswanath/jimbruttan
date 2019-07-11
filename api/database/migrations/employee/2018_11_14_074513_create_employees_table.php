<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->string('company_id');
            $table->string('number');
            $table->string('title');
            $table->string('name',250);
            $table->string('nick_name',250);
            $table->enum('gender', ['MALE', 'FEMALE', 'OTHERS']);
            $table->string('mobile',20);
            $table->string('email',100);
            $table->text('remarks');
            $table->timestamps();
            $table->unique('employee_id');
            $table->foreign('company_id')->references('company_id')->on('company')->onDelete('cascade');
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
        Schema::dropIfExists('employees');
    }
}
