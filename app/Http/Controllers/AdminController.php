<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Question;
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
            $questions = Question::with('choices', 'scores')
                ->orderBy('id', 'desc')
                ->take(3)
                ->get();

            $comments = Comment::with('posts')
                ->get();

            $user = Auth::user()->username;

            return view('admin.teacher', compact('posts', 'questions', 'comments', 'title', 'user'));
            
        }else{
            return redirect('login');
        }
    }

    public function student(){
        if (Auth::user()->role == 'first_class' || Auth::user()->role == 'final_class') {
            $title = 'Admin Student';

            $user = Auth::user()->username;

            return view('admin.student', compact('title', 'user'));
        }else{
            return redirect('login');
        }
    }
}
