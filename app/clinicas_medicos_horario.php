<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicas_medicos_horario extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'clinicas_medicos_horarios';

   protected $primaryKey = 'id_clinica_medicos_horarios';
   
   protected $fillable = [
    'medico_especialidades_id',
    'clinica_id',
    'dias_atencion',
    'horas_atencion',   
    ];
}
