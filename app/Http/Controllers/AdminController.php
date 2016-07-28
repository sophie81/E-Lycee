<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Auth;

class AdminController extends Controller
{
    private $paginate = 10;

    public function teacher(){
        if (Auth::user()->role == 'teacher') {
            $title = 'Post';
            $posts = Post::with('comments', 'user')
                ->orderBy('date', 'desc')
                ->take(3)
                ->get();

            return view('admin.teacher', compact('posts', 'title'));
        }else{
            return redirect('login');
        }
    }

    public function student(){
        if (Auth::user()->role == 'first_class' || Auth::user()->role == 'final_class') {
            $title = 'Admin Student';

            return view('admin.student', compact('title'));
        }else{
            return redirect('login');
        }
    }
}
