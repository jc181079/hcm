<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinica extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'clinicas';

   protected $primaryKey = 'id_clinicas';
   
   protected $fillable = [
    'rif_clinica',
    'nom_clinica',
    'dir_clinica',
    'tlf_clinica',
    'correo_clinica',
  
    ];
}
