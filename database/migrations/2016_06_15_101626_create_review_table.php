<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_email');
            $table->string('doctor_email');
            $table->string('review');
            $table->integer('stars');
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
        Schema::drop('review');
    }
}