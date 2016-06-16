<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symptoms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->length(10)->unsigned();
            $table->string('symptoms');
            $table->timestamps();
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
        Schema::drop('symptoms');
    }
}