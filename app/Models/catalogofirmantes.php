<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogofirmantes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido_materno',
        'apellido_paterno',

  
  
    ];
}
