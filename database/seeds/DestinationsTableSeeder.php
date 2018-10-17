<?php

use Illuminate\Database\Seeder;
use App\Destination;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destination::create([
        	'name' 			=> 'PAGAR FACTURA NUEVA',
        	'description' 	=> 'Paga factura nueva del cliente',
        ]);

        Destination::create([
        	'name' 			=> 'PAGAR FACTURA ORIGEN',
        	'description' 	=> 'Paga factura origen de la devolucion',
        ]);

        Destination::create([
        	'name' 			=> 'PAGAR OTRA FACTURA DEL PAX',
        	'description' 	=> 'Paga otra factura del mismo cliente ',
        ]);

        Destination::create([
        	'name' 			=> 'MM',
        	'description' 	=> 'Divide devolucion',
        ]);

        Destination::create([
        	'name' 			=> 'ANTICIPO DE PAX',
        	'description' 	=> 'Se deja en cuenta de anticipo del cliente',
        ]);
    }
}
