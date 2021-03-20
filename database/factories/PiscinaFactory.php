<?php

namespace Database\Factories;

use App\Models\Piscina;
use Illuminate\Database\Eloquent\Factories\Factory;

class PiscinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Piscina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
			'hotel_id' => $this->faker->numberBetween(1, 5), //Tengo 10 hoteles creados, así que cojo un id dentro de ese rango
			'observaciones' => $this->faker->text(100), //Texto para observaciones de
            'fecha_creacion' => now(),
            'fecha_actualizacion' => now(),
        ];
    }
}
