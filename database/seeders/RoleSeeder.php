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
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Supervisor']);
        $role3 = Role::create(['name' => 'Maestro']);

        Permission::create(['name' => 'Admin.Alumnos.IndexAlumnos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Admin.Alumnos.CreateAlumnos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Admin.Alumnos.EditAlumnos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Admin.Alumnos.DestroyAlumnos'])->syncRoles([$role1, $role2]);


        /* Permiso maestros */
        Permission::create(['name' => 'Personal.Index'])->syncRoles([$role3]);
    }
}
