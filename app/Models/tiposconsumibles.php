<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiposconsumibles extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'tipo_consumible',
            'descripcion',
            'SO',
            'RAM',
            'aditamentos',
            'fecha_vencimiento'
    ];

}
