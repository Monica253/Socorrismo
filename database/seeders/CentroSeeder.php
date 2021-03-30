<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Centro;

class CentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Centro::create([
            'nombre' => 'Princesa Yaiza',
            'slug' => 'princesa-yaiza',
            'cadena_hotelera' => 'Princesa Yaiza Hotel Resort',
            'email' => 'princesayaiza@hotels.com',
            'telefono' => '928554575',
            'direccion' => 'Av. de Papagayo, 22, 35580',
            'latitud' => '28.8643880',
            'longitud' => '-13.8222510',
            'horarios' => '11:00 - 19:00',
        ]);
        Centro::create([
            'nombre' => 'Meliá Salinas',
            'slug' => 'melia-salinas',
            'cadena_hotelera' => 'Meliá Hotels International',
            'email' => 'melia.salinas@melia.com',
            'telefono' => '928590040',
            'direccion' => 'Avda. Islas Canarias, Costa Teguise 35509',
            'latitud' => '29.0007721',
            'longitud' => '-13.4848378',
            'horarios' => '10:00 - 18:00',
        ]);
        Centro::create([
            'nombre' => 'H10 Suites Lanzarote Gardens',
            'slug' => 'h10-suites-lanzarote-gardens',
            'cadena_hotelera' => 'H10 Hotels',
            'email' => 'h10@h10hotels.com',
            'telefono' => '900444466',
            'direccion' => 'Av. de las Islas Canarias, 13, 35580',
            'latitud' => '29.0017184',
            'longitud' => '-13.4880687',
            'horarios' => '10:00 - 18:00',
        ]);
        Centro::create([
            'nombre' => 'TUI BLUE Flamingo Beach',
            'slug' => 'tui-blue-flamingo-beach',
            'cadena_hotelera' => 'Flamingo Beach Resort',
            'email' => 'info@flamingobeach.com',
            'telefono' => '442036080834',
            'direccion' => 'Avenida de las Canarias, Playa Blanca',
            'latitud' => '28.8592012',
            'longitud' => '-13.8420632',
            'horarios' => '10:00 - 18:00',
        ]);
        Centro::create([
            'nombre' => 'Sandos Papagayo Beach Resort',
            'slug' => 'sandos-papagayo-beach-resort',
            'cadena_hotelera' => 'Sandos Hotels & Resorts',
            'email' => 'sandos@hotels.com',
            'telefono' => '928519111',
            'direccion' => 'Calle las Acacias, 6, 35580 Yaiza',
            'latitud' => '28.8589850',
            'longitud' => '-13.7986350',
            'horarios' => '10:00 - 18:00',
        ]);
        Centro::create([
            'nombre' => 'Hotel Grand Teguise Playa',
            'slug' => 'hotel-grand-teguise-playa',
            'cadena_hotelera' => 'Grand Teguise Hotels',
            'email' => 'grandteguise@hotels.com',
            'telefono' => '928590654',
            'direccion' => 'Avenida del Jabillo, 35508',
            'latitud' => '28.9171640',
            'longitud' => '-13.7901086',
            'horarios' => '11:00 - 19:00',
        ]);
    }
}
