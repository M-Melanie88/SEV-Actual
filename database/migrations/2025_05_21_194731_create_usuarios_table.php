<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();           // name → nombre
            $table->string('apellido_paterno')->nullable(); // first_surname → apellido_paterno
            $table->string('apellido_materno')->nullable(); // second_surname → apellido_materno
            $table->string('nombre_usuario')->nullable()->unique();
            $table->string('password')->nullable(); 
            $table->integer('rol')->nullable(); 
            // $table->unsignedBigInteger('id_solicitante'); // id_department → departamento_id
            // $table->foreign('id_solicitante')->references('id')->on('solicitante');
            $table->rememberToken();
            $table->timestamps();

        });

          FacadesDB::table('usuarios')->insert([
            'nombre'=>'Daniel',
            'apellido_paterno'=>'Luna',
            'apellido_materno'=>'Serna',
            'nombre_usuario'=>'AdminSerna',
            'password'=>bcrypt('Serna1234'),
            'rol'=>1,
          ]);
    }

  
 /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
