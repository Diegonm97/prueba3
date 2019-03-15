<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Clientes
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'Clientes.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear usuarios',
            'slug'          => 'Clientes.create',
            'description'   => 'Permite crear clientes en el sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'Clientes.show',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'Clientes.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);
        
        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

//users
        Permission::create([
            'name'          => 'Navegar cuenta',
            'slug'          => 'Users.index',
            'description'   => 'Lista y navega todos los cuenta del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear cuenta',
            'slug'          => 'Users.create',
            'description'   => 'Permite crear Users en el sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'Users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'Users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);

//configuracion

         Permission::create([
            'name'          => 'Edición de configuracion',
            'slug'          => 'Configuracion.edit',
            'description'   => 'Podría editar cualquier dato que se encuentre en configuracion',
        ]);

          Permission::create([
            'name'          => 'ver configuracion',
            'slug'          => 'Configuracion.index',
            'description'   => 'ver la lista de configuracion',
        ]);
    
//Clientes
        Permission::create([
            'name'          => 'Navegar entidades',
            'slug'          => 'Entidades.index',
            'description'   => 'Lista y navega todos las entidades del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear entidades',
            'slug'          => 'Entidades.create',
            'description'   => 'Permite crear entidades en el sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de la entidad',
            'slug'          => 'Entidades.show',
            'description'   => 'Ve en detalle cada entidad del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Edición de entidades',
            'slug'          => 'Entidades.edit',
            'description'   => 'Podría editar cualquier dato de una entidad del sistema',
        ]);
        

        
    }
}
