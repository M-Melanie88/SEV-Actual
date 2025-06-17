<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tiposequipos>
 */
class tiposequiposFactory extends Factory
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
            'nombre'=> $this ->faker->word(),
            'marca'=> $this ->faker->word(),
            'serie'=> $this ->faker->randomElement(['a','b','c','d','1','2','3','4']),
            'inventario'=> $this ->faker->randomElement(['a','b','c','d','1','2','3','4']),
            'modelo'=> $this ->faker->word(),
        ];
    }
}
