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
        Schema::create('devoluciones', function (Blueprint $table) {
            $table->id('id');
            // $table->unsignedBigInteger('id_equipo_prestado');
            $table->date('fecha_devolucion')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();

// $table->foreign('id_equipo_prestado')->references('id')->on('equiposprestados');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devoluciones');
    }
};
