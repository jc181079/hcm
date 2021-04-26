<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orden_examene extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'orden_examenes';

   protected $primaryKey = 'id_orden_examen';
   
   protected $fillable = [
    'exa_clinicas_id',
    'exa_laboratorios_id',
    'otro_examen',
    'medico_id',
    'cita_id',
    ];
}
