<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equiposprestados extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'id_usuario', 
        'fecha_prestamo', 
        'id_cat_nombre',
        'status', 
        'fecha_prorroga',
        'id_tipo_equipo',
        'id_devolucion'
    ];

 


    public function usuario()
    {
        return $this->belongsTo(usuarios::class, 'id_usuario');
    }
    public function catalogonombre()
    {
        return $this->belongsTo(catalogonombres::class, 'id_cat_nombre');
    }
    public function tipoequipo()
    {
        return $this->belongsTo(tiposequipos::class, 'id_tipo_equipo');
    }
    public function devolucion()
    {
        return $this->belongsTo(devoluciones::class, 'id_devolucion');
    }

    // public function return()
    // {
    //     return $this->hasOne(Returns::class, 'loan_id');
    // }
}
