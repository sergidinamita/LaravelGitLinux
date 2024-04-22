<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opciones extends Model
{
    protected $table = 'opciones'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_opcion';


    protected $fillable = [
        'descripcion', // Descripción de la opcion
        'id_pregunta', // Id pregunta relacionada
    ];

    public $timestamps = false;


    // Relación con el modelo Encuesta
    public function preguntas()
    {
        return $this->belongsTo(Preguntas::class, 'id_pregunta');
    }
}
