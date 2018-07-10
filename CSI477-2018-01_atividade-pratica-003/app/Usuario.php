<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table = 'users';

    protected $fillable = [ 'name', 'email' , 'password', 'type' ];

    public function procedimentos(){
    	return $this->hasMany('App\Procedimento');
    }

    public function exames(){
    	return $this->hasMany('App\Exame');
    }
}
