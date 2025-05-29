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
        Schema::create('valesconsumibles', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_emision')->nullable(); // issue_date → fecha_emision
            $table->string('numero_oficio')->nullable();     // number_ofice (corregido a numero_oficio)
            $table->string('observaciones')->nullable();     // observations → observaciones
         
            $table->string('folio_dti')->nullable();          // sheet_dti → hoja_dti


            $table->unsignedBigInteger('id_solicitante')->nullable();
            $table->foreign('id_solicitante')->references('id')->on('solicitantes')->nullable();
            $table->unsignedBigInteger('id_cat_nombre')->nullable();
            $table->foreign('id_cat_nombre')->references('id')->on('catalogonombres')->nullable();
            $table->unsignedBigInteger('id_tipo_consumible')->nullable();
            $table->foreign('id_tipo_consumible')->references('id')->on('tiposconsumibles')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valesconsumibles');
    }
};
