<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class AdminController extends Controller
{
    private $paginate = 10;

    public function teacher(){
        $title = 'Post';
        $posts = Post::with('comments', 'user')
            ->orderBy('date', 'desc')
            ->take(3)
            ->get()
        ;

        return view('admin.teacher', compact('posts', 'title'));
    }

    public function student(){
        $title = 'Admin Student';

        return view('admin.student', compact('title'));
    }
}
