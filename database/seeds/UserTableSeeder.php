<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'user' 			=> 'GVV',
        	'name' 			=> 'GUSTAVO',
        	'last_name' 	=> 'VASQUEZ',
        	'rut' 			=> '16147394-4',
        	'email' 		=> 'gvasquez@gvv.cl',
        	'birthday_date' => '1985-10-11',
        	'password' 		=> bcryp('123456')
        	
        ]);
    }
}



           