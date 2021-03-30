<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mónica Betancort Hernández',
            'email' => 'mbetancorthernndez@gmail.com',
            'password' => bcrypt('Csas1234')
        ])->assignRole('Admin', 'Empleado');
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Csas1234')
        ])->assignRole('Admin');
    }
}
