<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Doctor;
use App\Patient;
use App\MedVend;

class DatabaseSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$admin = new User;
    	$admin->email = "admin@smart.com";
    	$admin->password = \Hash::make('disney');
    	$admin->level = '5';
    	$admin->save();
        // $this->call(UsersTableSeeder::class);
    }
}
