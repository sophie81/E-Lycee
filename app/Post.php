<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates=['date'];
    protected $fillable=['title', 'abstract', 'content', 'status', 'date', 'url_thumbnail', 'user_id'];

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->hasMany('App\Comment')->opened();
    }

    public function scopeOpened($query){
        return $query->where('status', '=', 'published');
    }

    public function scopeClosed($query){
        return $query->where('status', '=', 'unpublished');
    }

}
