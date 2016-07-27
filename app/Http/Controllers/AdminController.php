<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class AdminController extends Controller
{
    public function teacher(){
        $title = 'Admin Teacher';
        $posts = Post::with('category', 'user', 'tags', 'picture')
            ->opened();

        return view('admin.teacher', compact('posts', 'title'));
    }

    public function student(){
        $title = 'Admin Student';

        return view('admin.student', compact('title'));
    }
}
