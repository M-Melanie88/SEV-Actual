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
            $table->string('tipo_consumible')->nullable();     // observations → observaciones        
            $table->text('descripcion')->nullable(); // description → descripcion
            $table->string('SO')->nullable();     // brand → marca
            $table->string('RAM')->nullable();    // model → modelo
            $table->string('aditamentos')->nullable(); 
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
