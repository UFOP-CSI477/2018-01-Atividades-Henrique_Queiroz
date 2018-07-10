<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    protected $table = 'tests';

    protected $fillable = [ 'user_id', 'procedure_id' , 'date'];

    public function usuarios() {
      	return $this->belongsTo('App\Usuario');
    }

    public function procedimentos() {
      	return $this->belongsTo('App\Procedimento');
    }
}
