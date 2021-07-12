<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'idrol';
    protected $fillable = ['nomrol'];

    public function users(){
        $this->hasMany('App\User');
    }
}
