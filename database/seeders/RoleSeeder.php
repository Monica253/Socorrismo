<?php

namespace Database\Seeders;

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
        $role2 = Role::create(['name' => 'Empleado']);

        Permission::create(['name' => 'admin.home'])->assignRole($role1);

        Permission::create(['name' => 'admin.users.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.update'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.centros.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.centros.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.centros.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.centros.update'])->assignRole($role1);
        Permission::create(['name' => 'admin.centros.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.piscinas.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.piscinas.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.piscinas.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.piscinas.update'])->assignRole($role1);
        Permission::create(['name' => 'admin.piscinas.destroy'])->assignRole($role1);
    }
}
