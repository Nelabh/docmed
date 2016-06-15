<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_email');
            $table->string('doctor_email');
            $table->timestamp('datetime');
            $table->string('payment_status');
            $table->integer('order_id')->length(10)->unsigned();    
            $table->timestamps();
            $table->foreign('patient_email')->references('email')->on('patients')->onDelete('cascade');
            $table->foreign('doctor_email')->references('email')->on('doctors')->onDelete('cascade');
            $table->foreign('order_id')->references('order_id')->on('connection')->onDelete('cascade');


        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('appointment');
    }
}