<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicas_municipio extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'clinicas_municipios';

   protected $primaryKey = 'id_clinica_municipio';
   
   protected $fillable = [
    'clinica_id',
    'municipio_id',  
    ];
}
