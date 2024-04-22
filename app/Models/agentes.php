<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agentes extends Model
{
    protected $table = 'agents'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_agents';


    protected $fillable = [
        'localitzacion', // Descripción de la opcion
        'id_empresa', // Id pregunta relacionada
    ];

    public $timestamps = false;


    // Relación con el modelo Encuesta
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
}
