<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiposequipos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'nombre', 
            'marca',
            'serie',
            'inventario',
            'modelo'

            
    ];


}
