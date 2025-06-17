<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\catalogofirmantes>
 */
class catalogofirmantesFactory extends Factory
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
        ];
    }
}
