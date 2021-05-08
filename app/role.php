<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'roles';
    
    protected $primaryKey = 'id';
    
    protected $fillable = ['name', 'slug', 'description', 'special'];
}
