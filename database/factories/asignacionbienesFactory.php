<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\asignacionbienes>
 */
class asignacionbienesFactory extends Factory
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
            'folio'=> $this ->faker->randomElement(['1','2','a','b','c','d','3','4']),
            'descripcion'=> $this ->faker->sentence(50),
            'marca'=> $this ->faker->word(),
            'modelo'=> $this ->faker->word(),
            'asignacion'=> $this ->faker->word(),
            // 'cantidad'=> $this ->faker->randomNumber(5),
            'fecha_asignacion'=> $this ->faker->dateTimeThisMonth(),
            'numero_serie'=> $this ->faker->randomElement(['1','2','a','b','c','d','3','4']),
            'codigo_inventario'=> $this ->faker->randomNumber(5),
            'observaciones'=> $this ->faker->sentence(50),
            'id_cat_nombre'=> $this ->faker->randomElement(['1','2']),
            'id_cat_firmantes'=> $this ->faker->randomElement(['1','2']),
            'id_devolucion'=> $this ->faker->randomElement(['1','2']),
            'id_tipo_equipo'=> $this ->faker->randomElement(['1','2']),
        ];
    }
}
