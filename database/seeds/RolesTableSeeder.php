<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([

            'name'    => 'administrador',
            'slug'    => 'administrador',
            'description'    => 'administrador',
            'special'   => 'all-access',
        ]);
        Role::create([

            'name'    => 'trabajador',
            'slug'    => 'trabajador',
            'description'    => 'trabajador',
            'special'   => '',
        ]);
        Role::create([

            'name'    => 'cliente',
            'slug'    => 'cliente',
            'description'    => 'cliente',
            'special'   => 'all-access',
        ]);
    }
}
