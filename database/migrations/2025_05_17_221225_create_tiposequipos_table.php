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
        Schema::create('tiposequipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(); // name → nombre
            $table->string('marca')->nullable(); // name → nombre
            $table->string('serie')->nullable(); // name → nombre
            $table->string('inventario')->nullable(); // name → nombrex
            $table->string('modelo')->nullable(); // name → nombrex
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiposequipos');
    }
};
