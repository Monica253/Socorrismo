<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Piscina;

class PiscinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Piscina::factory(5)->create();
    }
}