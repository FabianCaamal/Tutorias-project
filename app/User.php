<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  use Notifiable;

  public $timestamps = false;

  protected $table = 'usuario';
  protected $primaryKey = 'idusuario';
  protected $fillable = [ 'email', 'password', 'idrol'];

  public function maestro(){
    return $this->belongsTo('App\Models\Maestro', 'idusuario');
  }

  public function alumno(){
    return $this->hasOne('App\Models\Alumno', 'idusuario');
  }

  public function rol(){
    return $this->belongsTo('App\Models\Rol', 'idrol');
  }
}
