<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function domicilios(){
    	return $this->hasMany('App\Domicilio');
    }
}
