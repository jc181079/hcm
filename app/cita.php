<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'citas';

   protected $primaryKey = 'id_cita';
   
   protected $fillable = [
    'fecha_cita',
    'clinica_medicos_horarios_id',
    'clinica_municipio_id',
    'medico_id',
    'medico_especialidad_honorarios_id',
    'ci_beneficiario',
    'estatus_cita',
    
    ];
}
