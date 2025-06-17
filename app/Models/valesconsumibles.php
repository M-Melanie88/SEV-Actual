<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class valesconsumibles extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'fecha_emision', 
        'numero_oficio', 
        'cantidad',
        'observaciones', 
        'id_cat_nombre',
        'id_cat_firmantes',
        'id_tipo_consumible',
        'folio_dti',
    ];


    public function tipoconsumible()
    {
        return $this->belongsTo(tiposconsumibles::class, 'id_tipo_consumible');
    }
    public function cat_nombre()
    {
        return $this->belongsTo(catalogonombres::class, 'id_cat_nombre');
    }
    public function cat_firmantes()
    {
        return $this->belongsTo(catalogofirmantes::class, 'id_cat_firmantes');
    }
}
