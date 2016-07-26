<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function scores(){
        return $this->hasOne('App\Score');
    }

    public function choices(){
        return $this->hasMany('App\Choice');
    }
}
