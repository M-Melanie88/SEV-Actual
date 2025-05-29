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
        'id_usuario',
        'observaciones', 
        'id_cat_nombre',
        'id_tipo_consumible',
        'solio_dti',
    ];

    public function usuario()
    {
        return $this->belongsTo(usuarios::class);
    }

    public function cat_nombre()
    {
        return $this->belongsTo(catalogonombres::class);
    }

    public function tipoconsumible()
    {
        return $this->belongsTo(tiposconsumibles::class, 'id_tipo_consumible');
    }
}
