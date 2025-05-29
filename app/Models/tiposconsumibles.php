<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiposconsumibles extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'descripcion', 
        'marca', 
        'modelo',
        'capacidad', 
        'fecha_vencimiento',
        'cantidad',
    ];

}
