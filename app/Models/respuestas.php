<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respuestas extends Model
{
    protected $table = 'respuestas'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_respuesta';


    protected $fillable = [
        'data_respuesta', // Descripción de la opcion
        'id_pregunta', // Id pregunta relacionada
        'id_usuarios', // Id pregunta relacionada
    ];

    public $timestamps = false;


    // Relación con el modelo Encuesta
    public function usuarios()
    {
        return $this->belongsTo(User::class, 'id_usuarios');
    }
}
