<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'empresa';

    // Nombre de la columna de la clave primaria
    protected $primaryKey = 'id_empresa';

    // Indica si la tabla tiene las marcas de tiempo "created_at" y "updated_at"
    public $timestamps = false;

    // Los atributos que se pueden asignar masivamente (fill)
    protected $fillable = [
        'nombre',
    ];

    // Otros métodos, relaciones, etc., según sea necesario
}