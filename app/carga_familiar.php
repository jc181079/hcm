<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carga_familiar extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'carga_familiars';

   protected $primaryKey = 'id_carga_familiar';
   
   protected $fillable = [
    'nom_pariente',
    'ape_pariente',
    'ci_pariente',
    'edad_pariente',
    'sexo_pariente',
    'ec_pariente',
    'parentesco',
    'empleado_id'
    ];
}
