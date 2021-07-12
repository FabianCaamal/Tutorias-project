<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TutDocumentoAlumno extends Model
{
    protected $table = 'tut_documentoalumno';
    public $timestamps=false;
    protected $fillable = ['alumno_id','documento_id','url','iddrive' ];
}
