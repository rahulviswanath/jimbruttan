<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesIdentityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_identity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->unsignedTinyInteger('id_type')->comment('1-AADHAAR, 2-Driving license', '3-Election card', '4-Passport');
            $table->string('number',50);
            $table->string('name',50);
            $table->date('expire_date');
            $table->unsignedTinyInteger('is_verified')->default(0);
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
        Schema::dropIfExists('employees_identity');
    }
}
