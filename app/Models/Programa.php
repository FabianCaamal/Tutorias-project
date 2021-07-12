<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programa';
	protected $primaryKey = 'idprograma';
    protected $fillable = [
        'nomprograma', 'cvprograma', 'idarea' ,'habilitado'
    ];

}
