<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    //Relacion de uno a muchos
    public function users(){
        return $this->hasMany('App\User');
    }
}
