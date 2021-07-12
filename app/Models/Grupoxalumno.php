<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupoxalumno extends Model
{
    protected $table = 'grupoxalumno';

    protected $fillable = ['idgrupo', 'idalumno'];
    
    public function grupo(){
        return $this->belongsTo('App\Models\Grupo', 'idgrupo');
    }
}
