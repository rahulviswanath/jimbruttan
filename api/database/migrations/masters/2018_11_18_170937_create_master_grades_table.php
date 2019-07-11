<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_grades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grade_id');
            $table->string('company_id')->nullable($value = true);
            $table->string('name',500);
            $table->unique('grade_id');
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
        Schema::dropIfExists('master_grades');
    }
}
