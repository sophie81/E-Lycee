<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function questions(){
        return $this->belongsTo('App\Question');
    }
}
