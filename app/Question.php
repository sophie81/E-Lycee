<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'content', 'class_level', 'status'];

    public function score(){
        return $this->hasOne('App\Score');
    }

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }

    public function scopeOpened($query){
        return $query->where('status', '=', 'published');
    }

    public function scopeClosed($query){
        return $query->where('status', '=', 'unpublished');
    }
}
