<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicineproviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('med_providers', function (Blueprint $table) {
            $table->increments('mp_id');
            $table->string('mp_name');
            $table->string('email');
            $table->integer('mobile')->length(10);
            $table->string('gender');
            $table->integer('age');
            $table->string('mci');
            $table->string('qualification');
            $table->string('shop_name');
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
        Schema::drop('med_providers');
    }
}
