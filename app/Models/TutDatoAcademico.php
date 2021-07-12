<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TutDatoAcademico extends Model
{
    protected $table = 'tut_datosacademicos';

    protected $primaryKey = 'iddatosacademicos';
    public $timestamps=false;
    protected $fillable = [
        'bachillerato', 
        'especialidad_bachillerato', 
        'razon_estudiar_utp',
        'primera_opcion_universidad',
        'primera_opcion_carrera',
        'materias_dificultan',
        'informacion_adicional',
        'idalumno'
    ];

    public function alumno(){
        return $this->belongsTo('App\Alumno');
    }
}
