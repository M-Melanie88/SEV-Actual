<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\asignacionbienes;
use App\Models\catalogofirmantes;
use App\Models\catalogonombres;
use App\Models\devoluciones;
use App\Models\equiposprestados;
use App\Models\solicitantes;
use App\Models\tiposconsumibles;
use App\Models\tiposequipos;
use App\Models\usuarios;
use App\Models\valesconsumibles;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        usuarios::factory(2)->create();
        devoluciones::factory(2)->create();
        tiposequipos::factory(2)->create();
        catalogofirmantes::factory(2)->create();
        catalogonombres::factory(2)->create(); 
        asignacionbienes::factory(2)->create();
        equiposprestados::factory(2)->create();
        tiposconsumibles::factory(2)->create();
        valesconsumibles::factory(2)->create();
    }
}
