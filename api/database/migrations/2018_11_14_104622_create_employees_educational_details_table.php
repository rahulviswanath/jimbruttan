<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesEducationalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_educational_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->unsignedTinyInteger('qualification');
            $table->string('from',4);
            $table->string('to',4);
            $table->string('institution',100);
            $table->text('remarks');
            $table->timestamps();
            $table->primary('id');
            $table->foreign('employee_id')->references('employee_id')->on('employees')->onDelete('cascade');
            $table->foreign('qualification')->references('id')->on('master_qualifications');
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
        Schema::dropIfExists('employees_educational_details');
    }
}
