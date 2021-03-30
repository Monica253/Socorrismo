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
        Piscina::create([
            'nombre' => 'Kikoland',
            'slug' => 'kikoland',
            'centro_id' => '1',
            'observaciones' => 'Piscina mediana. Vigilar también piscina pequeña de niños.',
        ]);
        Piscina::create([
            'nombre' => 'Piscina grande',
            'slug' => 'piscina-grande',
            'centro_id' => '1',
            'observaciones' => 'Piscina grande con mucha profundidad. Los niños tienen que estar con un adulto.',
        ]);
        Piscina::create([
            'nombre' => 'Piscina olímpica',
            'slug' => 'piscina-olímpica',
            'centro_id' => '4',
            'observaciones' => 'Solo se permite la entrada a adultos que vayan a nadar en las calles.',
        ]);
    }
}
