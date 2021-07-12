<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $table = 'maestro';
	protected $primaryKey = 'idusuario';
    protected $fillable = [
        'nombre', 'foto', 'tipo', 'maestrocol','url','idarea'
    ];

	public function user(){
		return $this->hasMany('App\User', 'idusuario');
	}
}

