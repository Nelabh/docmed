<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameMedId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
     Schema::table('med_providers', function ($table) {
        $table->renameColumn('mp_id', 'id');
    });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('med_providers', function ($table) {
            $table->renameColumn('id', 'mp_id');
        });
    }
}
