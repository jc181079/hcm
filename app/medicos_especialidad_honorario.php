<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicos_especialidad_honorario extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'medicos_especialidades_honorarios';

   protected $primaryKey = 'id_medico_especialidades';
   
   protected $fillable = [
    'medico_id',
    'especialidad_id',
    'monto_honorarios',
    ];
}
