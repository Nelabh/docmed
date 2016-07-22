<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeConnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::table('connection', function ($table) {
        $table->tinyInteger('status'); // 0=> Connection Requested  
                                       //1=>Approved By Doctor 
                                       //2=> Payment Made by user
                                        // 6=>Urgent Connection
                                        //7=>Urgent Connection Approved By Doctor 
                                       //8=>Urgent Connection Payment Made by user
                                      
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('connection');
    }
}
