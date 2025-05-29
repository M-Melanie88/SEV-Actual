<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignacionbienes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'id_solitante', 
        'id_cat_nombre', 
        'descripcion', 
        'marca',
        'modelo', 
        'cantidad',
        'serie',
        'inventario',
        'observaciones',

    ];


    public function solicitante()
    {
        return $this->belongsTo(solicitantes::class, 'id_solicitante');
    }
    public function catalogonombre()
    {
        return $this->belongsTo(catalogonombres::class, 'id_cat_nombre');
    }
}
