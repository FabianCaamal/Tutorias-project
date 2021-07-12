<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;
class TutDatoMedico extends Model
{
    protected $table = 'tut_datosmedicos';
	protected $primaryKey = 'id_datosmedicos';
    public $timestamps=false;
    protected $fillable = [
        'enfermedad', 
        'medicamentos', 
        'alergia',
        'medicameto_alergia',
        'informacion_adicional',
        'idalumno'
    ];

    public function alumno(){
        return $this->belongsTo('App\Models\Alumno', 'idalumno');
    }
}
