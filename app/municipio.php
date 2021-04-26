<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'municipio';

   protected $primaryKey = 'id_municipio';
   
   protected $fillable = [
    'nom_municipio',
    'estado_id',
    ];
}
