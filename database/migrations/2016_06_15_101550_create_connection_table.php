<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connection', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('patient_email');
            $table->string('doctor_email');
            $table->timestamps();
            $table->foreign('patient_email')->references('email')->on('patients')->onDelete('cascade');
            $table->foreign('doctor_email')->references('email')->on('doctors')->onDelete('cascade');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('connection');
    }
}