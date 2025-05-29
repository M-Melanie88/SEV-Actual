<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\valesconsumibles>
 */
class valesconsumiblesFactory extends Factory
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
            'fecha_emision'=> $this ->faker->dateTimeThisMonth(),
            'observaciones'=> $this ->faker->sentence(25),
            'numero_oficio'=> $this ->faker->randomElement(['a','b','c','d','1','2','3','4']),
            'folio_dti'=> $this ->faker->randomElement(['a','b','c','d','1','2','3','4']),
            'id_tipo_consumible'=> $this ->faker->randomElement(['1','2']),

            'id_cat_nombre'=> $this ->faker->randomElement(['1','2']),
            'id_solicitante'=> $this ->faker->randomElement(['1','2']),
        ];
    }
}
