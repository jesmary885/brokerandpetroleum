<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Cliente']);

        //Inicio

        Permission::create(['name' => 'oficina.index',
          'description' => 'Inicio'])->syncRoles([$role1,$role2]);

        //Administración

        Permission::create(['name' => 'admin.index',
        'description' => 'admin'])->syncRoles([$role1]);

    }
}
