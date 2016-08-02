<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $dates=['date'];
    protected $fillable=['title', 'content', 'status', 'date', 'post_id'];

    public function post(){
        return $this->belongsTo('App\Post');
    }
    public function scopeOpened($query){
        return $query->where('status', '=', 'published');
    }

    public function scopeClosed($query){
        return $query->where('status', '=', 'unpublished');
    }
}
