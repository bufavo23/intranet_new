<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User
        Permission::create([
        	'name' 			=> 'Navegar Usuarios',
        	'slug' 			=> 'users.index',
        	'description' 	=> 'Lista y Navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Ver detalle de Usuarios',
        	'slug' 			=> 'users.show',
        	'description' 	=> 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Edicion Usuarios',
        	'slug' 			=> 'users.edit',
        	'description' 	=> 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Navegar Usuarios',
        	'slug' 			=> 'users.destroy',
        	'description' 	=> 'Elimina cualquier dato de un usuario del sistema',
        ]);

        //Roles
        Permission::create([
        	'name' 			=> 'Navegar Roles',
        	'slug' 			=> 'roles.index',
        	'description' 	=> 'Lista y Navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Creacion de Roles',
        	'slug' 			=> 'roles.create',
        	'description' 	=> 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Ver detalle de Roles',
        	'slug' 			=> 'roles.show',
        	'description' 	=> 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Edicion Roles',
        	'slug' 			=> 'roles.edit',
        	'description' 	=> 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Navegar Roles',
        	'slug' 			=> 'roles.destroy',
        	'description' 	=> 'Elimina cualquier dato de un rol del sistema',
        ]);

        //Conceptos
        Permission::create([
        	'name' 			=> 'Navegar conceptos',
        	'slug' 			=> 'conceptos.index',
        	'description' 	=> 'Lista y Navega todos los conceptos del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Ver detalle de conceptos',
        	'slug' 			=> 'conceptos.show',
        	'description' 	=> 'Ver en detalle cada concepto del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Creacion de conceptos',
        	'slug' 			=> 'conceptos.create',
        	'description' 	=> 'Ver en detalle cada concepto del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Edicion conceptos',
        	'slug' 			=> 'conceptos.edit',
        	'description' 	=> 'Editar cualquier dato de un concepto del sistema',
        ]);
        Permission::create([
        	'name' 			=> 'Navegar conceptos',
        	'slug' 			=> 'conceptos.destroy',
        	'description' 	=> 'Elimina cualquier dato de un concepto del sistema',
        ]);
    }
}
