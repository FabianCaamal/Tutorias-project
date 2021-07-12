<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';
	protected $primaryKey = 'idalumno';
    protected $fillable = [
        'nomalumno', 'matricula', 'idusuario'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'idusuario');
    }
    public function grupoxalumno(){
        return $this->hasOne('App\Models\Grupoxalumno', 'idalumno');
    }
}
