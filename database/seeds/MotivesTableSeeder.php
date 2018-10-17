<?php

use Illuminate\Database\Seeder;
use App\Motive;

class MotivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motive::create([
        	'name' 			=> 'NO VIAJA',
        	'description' 	=> 'Cliente no puede viajar',
        ]);

        Motive::create([
        	'name' 			=> 'ENFERMEDAD',
        	'description' 	=> 'Pasajero presenta problemas de salud',
        ]);

        Motive::create([
        	'name' 			=> 'PROBLEMA FAMILIAR',
        	'description' 	=> 'Cliente tiene problemas familiares',
        ]);
    }
}
