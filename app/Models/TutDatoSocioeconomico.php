<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;
class TutDatoSocioeconomico extends Model
{
    protected $table = 'tut_datossocioeconomicos';
	protected $primaryKey = 'iddatossocioeconomicos';
    public $timestamps=false;
    protected $fillable = [
    	'idalumno',
        'residencia', 
        'vivecon', 
        'num_habitantes_casa',
        'dinero_semanal',
        'ocupacion_papa',
        'ocupacion_mama',
        'num_hermanos',
        'trabajo',
        'ganancia',
        'horas_semana',
        'funciones'
    ];

    public function alumno(){
        return $this->belongsTo('App\Models\Alumno', 'idalumno');
    }
}
