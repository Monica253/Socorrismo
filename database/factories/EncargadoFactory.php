<?php

namespace Database\Factories;

use App\Models\Encargado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EncargadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Encargado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'f_nacimiento' => $this->faker->date(),				//->format('Y-m-d')
			'direccion' => $this->faker->streetAddress(),
			'cod_postal' => $this->faker->postcode(),
			'telefono' => $this->faker->mobileNumber(),
			'email' => $this->faker->unique()->safeEmail,
            'dni' => $this->faker->dni(),
			'num_seg_social' => $this->faker->unique()->numberBetween(10000000000, 99999999999), //Número de la seguridad social (11 dígitos)
			'num_cuenta' => $this->faker->bankAccountNumber(),
			'banco' => $this->faker->randomElement(['CaixaBank', 'Banco Santander', 'BBVA', 'Banco Sabadell', 'Bankia', 'Bankinter']),
            'fecha_alta' => $this->faker->date(),
			'fecha_baja' => $this->faker->date(),
            'fecha_creacion' => now(),
            'fecha_actualizacion' => now(),
        ];
    }
}
