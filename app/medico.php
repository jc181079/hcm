<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'medicos';

   protected $primaryKey = 'id_medico';
   
   protected $fillable = [
    'nom_medico',
    'ci_medico',
    'rif_medico',
    'tlf_medico',
    'correo_medico',
    ];
}
