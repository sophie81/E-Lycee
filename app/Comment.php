<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $dates=['date'];
    protected $fillable=['title', 'content', 'status', 'date', 'post_id'];

    public function posts(){
        return $this->belongsTo('App\Post');
    }
}
