<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informes extends Model
{
    protected $table = 'informes'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_informe';


    protected $fillable = [
        'usuari', // Descripción de la opcion
        'enquesta', // Id pregunta relacionada
        'company',
        'n_preguntas',
    ];

    public $timestamps = false;


    // Relación con el modelo Encuesta
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    public function enquesta()
    {
        return $this->belongsTo(Encuesta::class, 'id_encuesta');
    }

    public function usuari()
    {
        return $this->belongsTo(Empresa::class, 'id');
    }



}
