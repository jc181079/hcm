<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examenes_clinica extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'examenes_clinicas';

   protected $primaryKey = 'id_examenes_clinicas';
   
   protected $fillable = [
    'nom_examenes',
    'precio_examen_clinica',
    'clinicas_id',
    ];
}
