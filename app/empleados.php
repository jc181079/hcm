<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'empleados';

   protected $primaryKey = 'id_empleado';
   
   protected $fillable = [
    'nom_empleado',
    'ape_empleado',  
    'ci_empleado',  
    'edad_empleado',  
    'sexo_empleado',  
    'ec_empleado',   
    ];
}
