<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\catalogonombres>
 */
class catalogonombresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre'=> $this ->faker->name(),
            'apellido_materno'=> $this ->faker->word(),
            'apellido_paterno'=> $this ->faker->word(),
  
            'id_solicitante'=> $this ->faker->randomElement(['1','2']),

        ];
    }
}
