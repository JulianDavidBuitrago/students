<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('documentTypeStudent');
            $table->string('documentNumberStudent');
            $table->string('codeStudent');
            $table->string('nameStudent');
            $table->string('surnameStudent');
            $table->string('sexStudent');
            $table->string('emailStudent');
            $table->string('phoneStudent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
