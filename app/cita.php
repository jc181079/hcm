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
    'clinica_municipio_id',
    'especialidad_medico_id',
    'medico_id',
    'ci_beneficiario',
    'dolencia_descripcion',
    'estatus_cita',
    'pre_compromiso'
    
    ];
}
