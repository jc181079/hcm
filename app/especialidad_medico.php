<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialidad_medico extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'especialidad_medicos';

   protected $primaryKey = 'id_empleado';
   
   protected $fillable = [
    'nom_especialidad',
    ];
}
