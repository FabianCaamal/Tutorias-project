<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TutDocumento extends Model
{
    protected $table ='tut_documentos';
    protected $primaryKey = 'iddocumentos';
    public $timestamps = false;
    protected $fillable = [
        'nombre', 'descripcion'
    ];

}
