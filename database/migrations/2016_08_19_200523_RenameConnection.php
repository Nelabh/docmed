<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameConnection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
     Schema::table('connection', function ($table) {
        $table->renameColumn('order_id', 'id');
    });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('connection', function ($table) {
            $table->renameColumn('id', 'order_id');
        });
    }
}
