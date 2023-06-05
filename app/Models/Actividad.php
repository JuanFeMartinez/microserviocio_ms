<?php

namespace App\Models;

use Illuminate\Datebase\Eloquent\Model;

class Actividad extends Model{
    protected $table='actividades';

    protected $fillable =[
        'id',
        'descripcion',
        'nota',
        'codigoEstudiante',
        'created_at',
        'updated_at'
    ];
}