<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefermentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deferments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adm');
            $table->string('yos');
            $table->string('ay');
            $table->string('semester');
            $table->string('nature');
            $table->string('period');
            $table->string('course_codes')->nullable();
            $table->string('reason');
            $table->string('hod')->default('pending');
            $table->string('dean')->default('pending');
            $table->string('registrar')->default('pending');
            $table->string('rejectionReason')->default('pending');
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
        Schema::dropIfExists('deferments');
    }
}
