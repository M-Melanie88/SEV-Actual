<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignacionbienes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'id_cat_firmantes', 
        'id_devolucion', 
        'id_tipo_equipo', 
        'id_cat_nombre', 
        'descripcion', 
        'marca',
        'modelo', 
        'cantidad',
        'serie',
        'inventario',
        'observaciones',

    ];


    public function catalogofirmante()
    {
        return $this->belongsTo(catalogofirmantes::class, foreignKey: 'id_cat_firmantes');
    }
    public function catalogonombre()
    {
        return $this->belongsTo(catalogonombres::class, 'id_cat_nombre');
    }

    public function devolucion()
    {
        return $this->belongsTo(devoluciones::class, foreignKey: 'id_devolucion');
    }
    public function tipoequipo()
    {
        return $this->belongsTo(tiposequipos::class, 'id_tipo_equipo');
    }

}
