<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examenes_laboratorio extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'examenes_laboratorios';

   protected $primaryKey = 'id_examenes';
   
   protected $fillable = [
    'nom_examen',
    
    ];
}
