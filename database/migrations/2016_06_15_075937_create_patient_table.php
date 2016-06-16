<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('patient_id');
            $table->string('patient_name');
            $table->string('email');
            $table->integer('mobile')->length(10);
            $table->string('gender');
            $table->integer('age');
            $table->string('bloodgroup');
            $table->string('occupation');
            $table->string('address');
            $table->string('city');
            $table->integer('pincode');
            $table->boolean('verified');
            $table->string('state');
            $table->string('country');
            $table->string('upload_photograph');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients');
    }
}