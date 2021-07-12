<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'periodo';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idperiodo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomperiodo', 'fecha_inicio', 'fecha_final'];

    
}
