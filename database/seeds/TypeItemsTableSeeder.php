<?php

use Illuminate\Database\Seeder;
use App\TypeItem;

class TypeItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeItem::create([
        	'name' 			=> 'PROGRAMAS',
        	'description' 	=> 'Programas Turisticos',
        ]);
        TypeItem::create([
        	'name' 			=> 'COMISIONES',
        	'description' 	=> '',
        ]);
        TypeItem::create([
        	'name' 			=> 'CONDICIONES',
        	'description' 	=> '',
        ]);
        TypeItem::create([
        	'name' 			=> 'REGULACIONES',
        	'description' 	=> '',
        ]);
        TypeItem::create([
        	'name' 			=> 'OTROS',
        	'description' 	=> '',
        ]);
    }
}
