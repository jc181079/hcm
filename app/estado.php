<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'estados';

   protected $primaryKey = 'id_estado';
   
   protected $fillable = [
    'nom_estado',
    ];
}
