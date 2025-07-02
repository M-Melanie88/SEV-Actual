<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\equiposprestados>
 */
class equiposprestadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'folio'=> $this ->faker->randomElement(['1','2','a','b','c','d','3','4']),
            'fecha_prestamo'=> $this ->faker->dateTimeThisMonth(),
            'status'=> $this ->faker->randomElement(['prestado','devuelto','prorroga','vencido']),
            'fecha_prorroga'=> $this ->faker->dateTimeThisMonth(),
            'id_usuario'=> $this ->faker->randomElement(['1','2']),
            'id_cat_nombre'=> $this ->faker->randomElement(['1','2']),
            'id_cat_firmantes'=> $this ->faker->randomElement(['1','2']),
            'id_tipo_equipo'=> $this ->faker->randomElement(['1','2']),
            'id_devolucion'=> $this ->faker->randomElement(['1','2']),


        ];
    }
}
