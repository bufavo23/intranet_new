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

        //Llamadas (calls)
        Permission::create([
            'name'          => 'Navegar Llamadas',
            'slug'          => 'calls.index',
            'description'   => 'Lista y Navega todos los Llamadas del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Llamadas',
            'slug'          => 'calls.create',
            'description'   => 'Ver en detalle cada Llamadas del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Llamadas',
            'slug'          => 'calls.show',
            'description'   => 'Ver en detalle cada Llamadas del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Llamadas',
            'slug'          => 'calls.edit',
            'description'   => 'Editar cualquier dato de un Llamadas del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Llamadas',
            'slug'          => 'calls.destroy',
            'description'   => 'Elimina cualquier dato de un Llamadas del sistema',
        ]);

        //Clientes (clients)
        Permission::create([
            'name'          => 'Navegar Clientes',
            'slug'          => 'clients.index',
            'description'   => 'Lista y Navega todos los Clientes del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Clientes',
            'slug'          => 'clients.create',
            'description'   => 'Ver en detalle cada Clientes del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Clientes',
            'slug'          => 'clients.show',
            'description'   => 'Ver en detalle cada Clientes del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Clientes',
            'slug'          => 'clients.edit',
            'description'   => 'Editar cualquier dato de un Clientes del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Clientes',
            'slug'          => 'clients.destroy',
            'description'   => 'Elimina cualquier dato de un Clientes del sistema',
        ]);

        //Contactos (contacts)
        Permission::create([
            'name'          => 'Navegar Contactos',
            'slug'          => 'contacts.index',
            'description'   => 'Lista y Navega todos los Contactos del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Contactos',
            'slug'          => 'contacts.create',
            'description'   => 'Ver en detalle cada Contactos del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Contactos',
            'slug'          => 'contacts.show',
            'description'   => 'Ver en detalle cada Contactos del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Contactos',
            'slug'          => 'contacts.edit',
            'description'   => 'Editar cualquier dato de un Contactos del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Contactos',
            'slug'          => 'contacts.destroy',
            'description'   => 'Elimina cualquier dato de un Contactos del sistema',
        ]);

        //Destinos Devoluciones (destinations)
        Permission::create([
            'name'          => 'Navegar Destinos Devoluciones',
            'slug'          => 'destinations.index',
            'description'   => 'Lista y Navega todos los Destinos Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Destinos Devoluciones',
            'slug'          => 'destinations.create',
            'description'   => 'Ver en detalle cada Destinos Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Destinos Devoluciones',
            'slug'          => 'destinations.show',
            'description'   => 'Ver en detalle cada Destinos Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Destinos Devoluciones',
            'slug'          => 'destinations.edit',
            'description'   => 'Editar cualquier dato de un Destinos Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Destinos Devoluciones',
            'slug'          => 'destinations.destroy',
            'description'   => 'Elimina cualquier dato de un Destinos Devoluciones del sistema',
        ]);

        //Items (items)
        Permission::create([
            'name'          => 'Navegar Items',
            'slug'          => 'items.index',
            'description'   => 'Lista y Navega todos los Items del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Items',
            'slug'          => 'items.create',
            'description'   => 'Ver en detalle cada Items del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Items',
            'slug'          => 'items.show',
            'description'   => 'Ver en detalle cada Items del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Items',
            'slug'          => 'items.edit',
            'description'   => 'Editar cualquier dato de un Items del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Items',
            'slug'          => 'items.destroy',
            'description'   => 'Elimina cualquier dato de un Items del sistema',
        ]);

        //Motivos Devoluciones (motives)
        Permission::create([
            'name'          => 'Navegar Motivos Devoluciones',
            'slug'          => 'motives.index',
            'description'   => 'Lista y Navega todos los Motivos Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Motivos Devoluciones',
            'slug'          => 'motives.create',
            'description'   => 'Ver en detalle cada Motivos Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Motivos Devoluciones',
            'slug'          => 'motives.show',
            'description'   => 'Ver en detalle cada Motivos Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Motivos Devoluciones',
            'slug'          => 'motives.edit',
            'description'   => 'Editar cualquier dato de un Motivos Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Motivos Devoluciones',
            'slug'          => 'motives.destroy',
            'description'   => 'Elimina cualquier dato de un Motivos Devoluciones del sistema',
        ]);

        //Noticias (news)
        Permission::create([
            'name'          => 'Navegar Noticias',
            'slug'          => 'news.index',
            'description'   => 'Lista y Navega todos los Noticias del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Noticias',
            'slug'          => 'news.create',
            'description'   => 'Ver en detalle cada Noticias del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Noticias',
            'slug'          => 'news.show',
            'description'   => 'Ver en detalle cada Noticias del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Noticias',
            'slug'          => 'news.edit',
            'description'   => 'Editar cualquier dato de un Noticias del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Noticias',
            'slug'          => 'news.destroy',
            'description'   => 'Elimina cualquier dato de un Noticias del sistema',
        ]);

        //Pasajeros (passengers)
        Permission::create([
            'name'          => 'Navegar Pasajeros',
            'slug'          => 'passengers.index',
            'description'   => 'Lista y Navega todos los Pasajeros del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Pasajeros',
            'slug'          => 'passengers.create',
            'description'   => 'Ver en detalle cada Pasajeros del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Pasajeros',
            'slug'          => 'passengers.show',
            'description'   => 'Ver en detalle cada Pasajeros del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Pasajeros',
            'slug'          => 'passengers.edit',
            'description'   => 'Editar cualquier dato de un Pasajeros del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Pasajeros',
            'slug'          => 'passengers.destroy',
            'description'   => 'Elimina cualquier dato de un Pasajeros del sistema',
        ]);

        //Proveedores (providers)
        Permission::create([
            'name'          => 'Navegar Proveedores',
            'slug'          => 'providers.index',
            'description'   => 'Lista y Navega todos los Proveedores del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Proveedores',
            'slug'          => 'providers.create',
            'description'   => 'Ver en detalle cada Proveedores del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Proveedores',
            'slug'          => 'providers.show',
            'description'   => 'Ver en detalle cada Proveedores del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Proveedores',
            'slug'          => 'providers.edit',
            'description'   => 'Editar cualquier dato de un Proveedores del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Proveedores',
            'slug'          => 'providers.destroy',
            'description'   => 'Elimina cualquier dato de un Proveedores del sistema',
        ]);

        //Devoluciones (refounds)
        Permission::create([
            'name'          => 'Navegar Devoluciones',
            'slug'          => 'refounds.index',
            'description'   => 'Lista y Navega todos los Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Devoluciones',
            'slug'          => 'refounds.create',
            'description'   => 'Ver en detalle cada Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Devoluciones',
            'slug'          => 'refounds.show',
            'description'   => 'Ver en detalle cada Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Devoluciones',
            'slug'          => 'refounds.edit',
            'description'   => 'Editar cualquier dato de un Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Devoluciones',
            'slug'          => 'refounds.destroy',
            'description'   => 'Elimina cualquier dato de un Devoluciones del sistema',
        ]);

        //Estado Devolucion (status)
        Permission::create([
            'name'          => 'Navegar Estado Devolucion',
            'slug'          => 'status.index',
            'description'   => 'Lista y Navega todos los Estado Devolucion del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Estado Devolucion',
            'slug'          => 'status.create',
            'description'   => 'Ver en detalle cada Estado Devolucion del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Estado Devolucion',
            'slug'          => 'status.show',
            'description'   => 'Ver en detalle cada Estado Devolucion del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Estado Devolucion',
            'slug'          => 'status.edit',
            'description'   => 'Editar cualquier dato de un Estado Devolucion del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Estado Devolucion',
            'slug'          => 'status.destroy',
            'description'   => 'Elimina cualquier dato de un Estado Devolucion del sistema',
        ]);

        //Estado Envio Devoluciones (statusends)
        Permission::create([
            'name'          => 'Navegar Estado Envio Devoluciones',
            'slug'          => 'statusends.index',
            'description'   => 'Lista y Navega todos los Estado Envio Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Estado Envio Devoluciones',
            'slug'          => 'statusends.create',
            'description'   => 'Ver en detalle cada Estado Envio Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Estado Envio Devoluciones',
            'slug'          => 'statusends.show',
            'description'   => 'Ver en detalle cada Estado Envio Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Estado Envio Devoluciones',
            'slug'          => 'statusends.edit',
            'description'   => 'Editar cualquier dato de un Estado Envio Devoluciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Estado Envio Devoluciones',
            'slug'          => 'statusends.destroy',
            'description'   => 'Elimina cualquier dato de un Estado Envio Devoluciones del sistema',
        ]);

        //Tipo Item (typeitems)
        Permission::create([
            'name'          => 'Navegar Tipo Item',
            'slug'          => 'typeitems.index',
            'description'   => 'Lista y Navega todos los Tipo Item del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Tipo Item',
            'slug'          => 'typeitems.create',
            'description'   => 'Ver en detalle cada Tipo Item del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Tipo Item',
            'slug'          => 'typeitems.show',
            'description'   => 'Ver en detalle cada Tipo Item del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Tipo Item',
            'slug'          => 'typeitems.edit',
            'description'   => 'Editar cualquier dato de un Tipo Item del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Tipo Item',
            'slug'          => 'typeitems.destroy',
            'description'   => 'Elimina cualquier dato de un Tipo Item del sistema',
        ]);

        //Tipo de Proveedor (typeproviders)
        Permission::create([
            'name'          => 'Navegar Tipo de Proveedor',
            'slug'          => 'typeproviders.index',
            'description'   => 'Lista y Navega todos los Tipo de Proveedor del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion de Tipo de Proveedor',
            'slug'          => 'typeproviders.create',
            'description'   => 'Ver en detalle cada Tipo de Proveedor del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de Tipo de Proveedor',
            'slug'          => 'typeproviders.show',
            'description'   => 'Ver en detalle cada Tipo de Proveedor del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion Tipo de Proveedor',
            'slug'          => 'typeproviders.edit',
            'description'   => 'Editar cualquier dato de un Tipo de Proveedor del sistema',
        ]);
        Permission::create([
            'name'          => 'Navegar Tipo de Proveedor',
            'slug'          => 'typeproviders.destroy',
            'description'   => 'Elimina cualquier dato de un Tipo de Proveedor del sistema',
        ]);




        
    }
}
