<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedimento extends Model
{
    protected $table = 'procedures';

    protected $fillable = [ 'name', 'price' , 'user_id' ];

    public function usuarios() {
      	return $this->belongsTo('App\Usuario');
    }

    public function exames(){
    	return $this->hasMany('App\Exame');
    }
}
