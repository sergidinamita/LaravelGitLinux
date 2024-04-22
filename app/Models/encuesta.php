<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = 'encuesta'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_encuesta';


    protected $fillable = [
        'descripcion', // Descripción de la encuesta
        'data_creacion', // Fecha de creación de la encuesta
        'data_finalizacion', // Fecha de finalización de la encuesta
        'id_empresa', // ID de la empresa asociada a la encuesta
    ];

    public $timestamps = false;


    // Relación con el modelo Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
}