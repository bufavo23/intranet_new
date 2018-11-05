<?php

use Illuminate\Database\Seeder;
use App\StatuSend;

class StatuSendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatuSend::create([
            'name'          => 'PENDIENTE',
            'description'   => 'Devolucion Pendiente',
        ]);

        StatuSend::create([
        	'name' 			=> 'RECHAZO',
        	'description' 	=> 'Devolucion Rechazada',
        ]);

        StatuSend::create([
        	'name' 			=> 'APROBADO',
        	'description' 	=> 'Devolucion Aprovada',
        ]);

        StatuSend::create([
        	'name' 			=> 'NULO',
        	'description' 	=> 'Devolucion Anulada',
        ]);
    }
}
