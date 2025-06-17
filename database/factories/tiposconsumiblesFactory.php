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

            'tipo_consumible'=> $this  ->faker->word(),
            'descripcion'=> $this ->faker->sentence(50),
            'SO'=> $this ->faker->word(),
            'RAM'=> $this ->faker->word(),
            'aditamentos'=> $this ->faker->word(),
            'fecha_vencimiento'=> $this ->faker->dateTimeThisMonth(),
      
        ];
    }
}
