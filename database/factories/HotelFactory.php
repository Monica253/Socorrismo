<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
			'cadena_hotelera' => $this->faker->company(),
			'email' => $this->faker->unique()->companyEmail(), //Email de compañía
			'telefono' => $this->faker->mobileNumber(),
			'direccion' => $this->faker->streetAddress(),
			'latitud'=> $this->faker->randomFloat(7, -90, 90),
            'longitud'=> $this->faker->randomFloat(7, -180, 180),
			'horarios' => $this->faker->randomElement(['10:00 - 18:00', '10:00 - 19:00', '11:00 - 19:00']),
            'fecha_creacion' => now(),
            'fecha_actualizacion' => now(),
        ];
    }
}
