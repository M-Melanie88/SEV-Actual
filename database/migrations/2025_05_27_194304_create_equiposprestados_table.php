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
        Schema::create('equiposprestados', function (Blueprint $table) {
     
            $table->id('id'); 

            $table->unsignedBigInteger('id_usuario')->nullable(); 
            $table->date('fecha_prestamo')->nullable(); 
            $table->unsignedBigInteger('id_cat_nombre')->nullable(); 
            $table->unsignedBigInteger('id_tipo_equipo')->nullable(); 
            $table->unsignedBigInteger('id_devolucion')->nullable(); 
            $table->string('status')->nullable(); 
            $table->date('fecha_prorroga')->nullable()->nullable(); 
            
            $table->timestamps();
            
            
            $table->foreign('id_usuario')->references('id')->on('usuarios')->nullable(); // users -> usuarios
            $table->foreign('id_cat_nombre')->references('id')->on('catalogonombres')->nullable(); // loan_detail -> detalle_prestamo
            $table->foreign('id_tipo_equipo')->references('id')->on('tiposequipos')->nullable();
            $table->foreign('id_devolucion')->references('id')->on('devoluciones')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equiposprestados');
    }
};
