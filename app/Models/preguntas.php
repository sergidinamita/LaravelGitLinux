<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    protected $table = 'preguntas'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_pregunta';


    protected $fillable = [
        'id_encuesta', // Descripción de la encuesta
        'enunciado', // Fecha de creación de la encuesta
        'id_tipus', // Fecha de finalización de la encuesta
    ];

    public $timestamps = false;


    // Relación con el modelo Encuesta
    public function encuesta()
    {
        return $this->belongsTo(Encuesta::class, 'id_encuesta');
    }

    // Relación con el modelo Tipus_pregunta
    public function tipus()
    {
        return $this->belongsTo(TipusPregunta::class, 'id_tipus');
    }
}
