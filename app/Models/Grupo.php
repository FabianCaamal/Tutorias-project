<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{

	public $timestamps = false;

    protected $table = 'grupo';

    protected $primaryKey = 'idgrupo';

    protected $fillable = ['nomgrupo', 'idperiodo', 'idcuatrimestre', 'idprograma', 'idmaestro'];

    public function programa(){
        return $this->belongsTo('App\Models\Programa', 'idprograma');
    } 
}
