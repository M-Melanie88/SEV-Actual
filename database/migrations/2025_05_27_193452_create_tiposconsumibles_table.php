<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tiposconsumibles', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion')->nullable(); // description → descripcion
            $table->string('marca')->nullable();     // brand → marca
            $table->string('modelo')->nullable();    // model → modelo
            $table->string('capacidad')->nullable(); // capacity → capacidad
            $table->string('cantidad')->nullable(); // capacity → capacidad
            $table->timestamp('fecha_vencimiento')->nullable(); // lapsed_closure → cierre_vencimiento

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiposconsumibles');
    }
};
