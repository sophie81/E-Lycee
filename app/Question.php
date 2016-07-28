<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'content', 'class_level', 'status'];

    public function scores(){
        return $this->hasOne('App\Score');
    }

    public function choices(){
        return $this->hasMany('App\Choice');
    }
}
