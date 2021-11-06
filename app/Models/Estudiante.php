<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable=[ 
        'paterno', 
        'materno',
        'nombre',
        'ci',
        'sexo',
        'fechanac',
        'celular'   
      ];
}
