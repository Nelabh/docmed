<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('doc_id');
            $table->string('doc_name');
            $table->string('email');
            $table->integer('mobile')->length(10);
            $table->string('gender');
            $table->integer('age');
            $table->integer('speciality')->length(10)->unsigned();
            $table->string('qualification');
            $table->string('hospital_affiliation');
            $table->integer('years_of_exp');
            $table->string('mci');
            $table->string('current_position');
            $table->string('address');
            $table->string('city');
            $table->integer('pincode');
            $table->string('state');
            $table->string('country');
            $table->tinyInteger('verified');
            $table->string('upload_photograph');

            $table->rememberToken();
            $table->timestamps();
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
            $table->foreign('speciality')->references('id')->on('speciality')->onDelete('cascade');

        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doctors');
    }
}
