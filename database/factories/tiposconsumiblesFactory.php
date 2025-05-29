<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tiposconsumibles>
 */
class tiposconsumiblesFactory extends Factory
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
            'descripcion'=> $this ->faker->sentence(50),
            'marca'=> $this ->faker->word(),
            'modelo'=> $this ->faker->word(),
            'capacidad'=> $this ->faker->randomElement(['1','2','a','b']),
            'fecha_vencimiento'=> $this ->faker->dateTimeThisMonth(),
            'cantidad'=> $this ->faker->randomNumber(5),

        ];
    }
}
