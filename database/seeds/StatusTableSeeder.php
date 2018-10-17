<?php

use Illuminate\Database\Seeder;
use App\Statu;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statu::create([
        	'name' 			=> 'CREADO',
        	'description' 	=> 'Devolucion Creada',
        ]);
        Statu::create([
        	'name' 			=> 'ENVIADA BSP',
        	'description' 	=> 'Devolucion Enviada por BSP',
        ]);
        Statu::create([
        	'name' 			=> 'ENVIADA GDS',
        	'description' 	=> 'Devolucion Enviada por GDS',
        ]);
        Statu::create([
        	'name' 			=> 'RECIBIDA',
        	'description' 	=> 'Devolucion llego a agencia',
        ]);
        Statu::create([
        	'name' 			=> 'PENDIENTE POR VENDEDORA',
        	'description' 	=> 'Devolucion pendiente por vendedora',
        ]);
        Statu::create([
        	'name' 			=> 'PENDIENTE POR FINANZAS',
        	'description' 	=> 'Devolucion pendiente por finanzas',
        ]);
        Statu::create([
        	'name' 			=> 'FINIQUITADA',
        	'description' 	=> 'Devolucion Finiquitada',
        ]);
        Statu::create([
        	'name' 			=> 'RECHAZADA',
        	'description' 	=> 'Devolucion Rechazada',
        ]);
        Statu::create([
        	'name' 			=> 'ENVIADA A OPERADOR',
        	'description' 	=> 'Devolucion Enviada a Operador',
        ]);
        Statu::create([
        	'name' 			=> 'ENVIADA A DEVOLAN',
        	'description' 	=> 'Devolucion Enviada a Devolan',
        ]);
        Statu::create([
        	'name' 			=> 'ANULADA',
        	'description' 	=> 'Devolucion Anulada',
        ]);

    }
}
