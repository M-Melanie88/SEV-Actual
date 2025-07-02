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

       
            $table->text('folio')->nullable(); 
            $table->text('descripcion')->nullable(); 
            $table->text('marca')->nullable(); 
            $table->text('modelo')->nullable(); 
            $table->date('fecha_asignacion')->nullable(); 
            // $table->integer('cantidad')->nullable(); 
            $table->string('numero_serie')->nullable(); 
            $table->string('codigo_inventario')->nullable(); 
            $table->string('asignacion')->nullable(); 
            $table->text('observaciones')->nullable(); 

            
            $table->timestamps();
            $table->unsignedBigInteger('id_cat_nombre')->nullable(); 
            $table->foreign('id_cat_nombre')->references('id')->on('catalogonombres')->onDelete("cascade")->onUpdate("cascade")->nullable();
            $table->unsignedBigInteger('id_cat_firmantes')->nullable(); 
            $table->foreign('id_cat_firmantes')->references('id')->on('catalogofirmantes')->onDelete("cascade")->onUpdate("cascade")->nullable();
            $table->unsignedBigInteger('id_devolucion')->nullable(); 
            $table->foreign('id_devolucion')->references('id')->on('devoluciones')->onDelete("cascade")->onUpdate("cascade")->nullable();
            $table->unsignedBigInteger('id_tipo_equipo')->nullable(); 
            $table->foreign('id_tipo_equipo')->references('id')->on('tiposequipos')->onDelete("cascade")->onUpdate("cascade")->nullable();
            $table->unsignedBigInteger('id_catalogo_logo')->nullable();
            $table->foreign('id_catalogo_logo')->references('id')->on('catalogologos')->onDelete("cascade")->onUpdate("cascade")->nullable();
         

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
