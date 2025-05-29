<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\devoluciones>
 */
class devolucionesFactory extends Factory
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
            'fecha_devolucion'=> $this ->faker->dateTimeThisMonth(),
            'observaciones'=> $this ->faker->sentence(50),
  
        ];
    }
}
