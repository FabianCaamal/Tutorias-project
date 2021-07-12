<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TutDatoGeneral extends Model
{
    protected $table = 'tut_datosgenerales';
	protected $primaryKey = 'id_datosgenerales';
    public $timestamps=false;
    protected $fillable = [
        'foto', 
        'celular', 
        'correo',
        'f_nacimiento',
        'direccion',
        'estado_civil', 
        'lugar_nacimiento', 
        'lugar_procedencia',
        'idalumno',
        'informacion_adicional', 
        'nombre_contactoemergencia', 
        'telefono_contactoemergencia',
        'nombre_mama',
        'telefono_mama',
         'nombre_papa',
        'telefono_papa'
    ];

    public function alumno(){
        return $this->belongsTo('App\Models\Alumno', 'idalumno');
    }
}