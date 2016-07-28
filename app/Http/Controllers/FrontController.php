<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;
use View;
use Carbon\Carbon;
use Cache;


class FrontController extends Controller
{
    private $paginate = 6;

    public function index(){
        $title = 'Home';

        $posts = Post::with('user', 'comments')
            ->orderBy('date', 'desc')
            ->take(3)
            ->opened()
            ->get();

        return view('front.index', compact('posts', 'title'));
    }

    public function actus(){
        $title = 'Actualités';

        $posts = Post::with('user', 'comments')
            ->orderBy('date', 'desc')
            ->opened()
            ->paginate($this->paginate);

        return view('front.actus', compact('posts', 'title'));
    }

    public function showActu($id){
        $title = 'Actualité';
        $post = Post::findOrFail($id);

        return view('front.showActu', compact('post', 'title'));
    }

    public function lycee(){
        $title = 'Lycée';

        return view('front.lycee', compact('title'));
    }

    public function contact(){
        $title = 'Contact';

        return view('front.contact', compact('title'));
    }

    public function mentions(){
        $title = 'Mentions légales';

        return view('front.mentions', compact('title'));
    }
/*
    public function showUser($id){
        $title = 'Auteur';
        $user = User::findorFail($id);

        return view('front.showUser', compact('user', 'title'));
    }

    public function showCategory($id){
        $category = Category::findOrFail($id);
        $name = $category->title;
        $title = "Categorie : {$name}";

        return view('front.showCategory', compact('category', 'title'));
    }*/

}
