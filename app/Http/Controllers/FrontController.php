<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\User;
use View;
use Carbon\Carbon;
use Cache;


class FrontController extends Controller
{
    private $paginate = 5;

    public function index(Request $request){
        $title = 'Home';

        $key ='home'.$request->get('page');

        if(Cache::has($key)){
            $posts = Cache::get($key);
        } else {
            $posts = Post::with('user', 'comments')
                ->opened()
                ->paginate($this->paginate);

            $expire = Carbon::now()->addMinute();

            Cache::put($key, $posts, $expire);
        }

        return view('front.index', compact('posts', 'title'));
    }

    public function actus(){
        $title = 'Actualités';

        $posts = Post::with('user', 'comments')
            ->opened()
            ->paginate($this->paginate);

        return view('front.actus', compact('posts', 'title'));
    }

    public function showActu($id){
        $title = 'Actualité';
        $post = Post::findOrFail($id);

        return view('front.showActu', compact('post', 'title'));
    }
/*
    public function user(){
        $title = 'Auteurs';
        $users = User::all();

        return view('front.user', compact('users', 'title'));
    }

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
