<?php

use Illuminate\Database\Seeder;
use App\TypeProvider;

class TypeProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeProvider::create([
        	'name' 			=> 'RENT A CAR',
        	'description' 	=> '',
        ]);
        TypeProvider::create([
        	'name' 			=> 'CRUCEROS',
        	'description' 	=> '',
        ]);
        TypeProvider::create([
        	'name' 			=> 'HOTELES',
        	'description' 	=> '',
        ]);
        TypeProvider::create([
        	'name' 			=> 'LINEAS AEREAS',
        	'description' 	=> '',
        ]);
        TypeProvider::create([
        	'name' 			=> 'MAYORISTAS',
        	'description' 	=> '',
        ]);
        TypeProvider::create([
        	'name' 			=> 'OTROS',
        	'description' 	=> '',
        ]);
        TypeProvider::create([
        	'name' 			=> 'SEGUROS',
        	'description' 	=> '',
        ]);
        TypeProvider::create([
        	'name' 			=> 'VISAS',
        	'description' 	=> '',
        ]);

    }
}
