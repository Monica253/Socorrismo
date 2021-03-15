<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Encargado;

class EncargadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Encargado::factory(5)->create();
    }
}
