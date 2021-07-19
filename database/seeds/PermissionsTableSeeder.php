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
        //Users
        Permission::create([

        	'name'  	  => 'Navegar usuarios',
        	'slug' 		  => 'users.index',
        	'description' => 'lista y navega todos los usuarios del sistema'
        ]);
        Permission::create([

        	'name'  	  => 'Ver detalles de usuarios',
        	'slug' 		  => 'users.show',
        	'description' => 'Ver detalle de cada usuario'
        ]);
        Permission::create([

        	'name'  	  => 'Edicion de usuarios',
        	'slug' 		  => 'users.edit',
        	'description' => 'Editar cualquier dato de usuario'
        ]);
        Permission::create([

        	'name'  	  => 'Eliminar usuarios',
        	'slug' 		  => 'users.destroy',
        	'description' => 'Eliminar cualquier dato del sistema'
        ]);

        //Roles
        Permission::create([

        	'name'  	  => 'Navegar roles',
        	'slug' 		  => 'roles.index',
        	'description' => 'lista y navega todos los roles del sistema'
        ]);
        Permission::create([

        	'name'  	  => 'Ver detalles de rol',
        	'slug' 		  => 'roles.show',
        	'description' => 'Ver detalle de cada rol sistema'
        ]);
        Permission::create([

        	'name'  	  => 'Creacion de roles',
        	'slug' 		  => 'roles.create',
        	'description' => 'Crear cualquier rol del sistema'
        ]);
        Permission::create([

        	'name'  	  => 'Edicion de roles',
        	'slug' 		  => 'roles.edit',
        	'description' => 'Editar cualquier rol del sistema'
        ]);
        Permission::create([

        	'name'  	  => 'Eliminar role',
        	'slug' 		  => 'roles.destroy',
        	'description' => 'Eliminar cualquier rol del sistema'
        ]);

    }
}
