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
        Schema::create('catalogofirmantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(); // name → nombre
            $table->string('apellido_paterno')->nullable(); // first_surname → apellido_paterno
            $table->string('apellido_materno')->nullable(); // second_surname → apellido_materno

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogofirmantes');
    }
};
