<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipusPregunta extends Model
{
    protected $table = 'tipus_pregunta'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_tipus';


    protected $fillable = [
        'id_tipus', // id_tipus
        'tipus', // tipus
    ];

    public $timestamps = false;

}