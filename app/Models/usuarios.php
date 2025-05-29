<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'nombre', 
        'apellido_paterno', 
        'apellido_materno',
        'nombre_usuario', 
        'password',
        'rol',

    ];

}
