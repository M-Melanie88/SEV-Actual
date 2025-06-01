<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogonombres extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'nombre', 
        'apellido_paterno', 
        'apellido_materno',
 
  
    ];


    // public function solicitante()
    // {
    //     return $this->belongsTo(solicitantes::class, 'id_solicitante');
    // }
}
