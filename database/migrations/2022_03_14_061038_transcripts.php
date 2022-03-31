<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transcripts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transcripts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('request');
            $table->string('year');
            $table->string('financeOfficer')->default('pending');
            $table->string('dean')->default('pending');
            $table->string('examOfficer')->default('pending');
            $table->string('registrar')->default('pending');
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
        //
    }
}
