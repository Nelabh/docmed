<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_email');
            $table->string('doctor_email');
            $table->string('order_id');
            $table->timestamp('datetime');
            $table->string('symptoms');
            $table->string('record_status');
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
        Schema::drop('history');
    }
}