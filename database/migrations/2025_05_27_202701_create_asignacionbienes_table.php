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
        Schema::create('asignacionbienes', function (Blueprint $table) {
            $table->id('id'); 

       
            $table->text('descripcion')->nullable(); 
            $table->text('marca')->nullable(); 
            $table->text('modelo')->nullable(); 
            $table->integer('cantidad')->nullable(); 
            $table->string('numero_serie')->nullable(); 
            $table->string('codigo_inventario')->nullable(); 
            $table->text('observaciones')->nullable(); 
            
            $table->timestamps();
            $table->unsignedBigInteger('id_cat_nombre')->nullable(); 
            $table->foreign('id_cat_nombre')->references('id')->on('catalogonombres')->nullable();
            $table->unsignedBigInteger('id_solicitante')->nullable(); 
            $table->foreign('id_solicitante')->references('id')->on('solicitantes')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacionbienes');
    }
};
