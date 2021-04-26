<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monedero_empleado extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'monedero_empleados';

   protected $primaryKey = 'id_monedero';
   
   protected $fillable = [
    'fecha_monedero',
    'monto_monedero',
    'monto_causado',
    'descripcion_monedero',
    'empleado_id',
    'cita_id',

    ];
}
