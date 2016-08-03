<?php

namespace App\Http\Controllers;

use Mail;
use View;
use Cache;
use App\Post;
use App\User;
use App\Comment;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactRequest;


class FrontController extends Controller
{
    private $paginate = 6;

    public function index(){
        $title = 'Accueil';

        $posts = Post::with('user', 'comments')
            ->orderBy('date', 'desc')
            ->take(3)
            ->opened()
            ->get();

        $other = Post::with('user', 'comments')
            ->orderBy('date', 'desc')
            ->take(5)
            ->skip(3)
            ->get();

        return view('front.index', compact('posts', 'other', 'title'));
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

    public function postContact(ContactRequest $request){
        $mails = Mail::send('email.contact',
            array(
                'name' => $request->get('nom'),
                'email' => $request->get('email'),
                'bodyMessage' => $request->get('message')
            ), function($message)
        {
            $message->to('dalouny.sn@gmail.com')->subject('Contact');
        });

        return redirect('contact')->with('message', 'Votre message a été envoyé, nous vous recontacterons dès que possible');
    }

    public function mentions(){
        $title = 'Mentions légales';

        return view('front.mentions', compact('title'));
    }

    public function search(Request $request){

       $search = $request->input('search-bar');
        
        $posts = Post::select()
        ->where('title', 'LIKE', '%'.$search.'%')
        ->orderBy('date', 'desc')
        ->get();

        if (count($posts) == 0) {
            return view('front.search')
            ->with('message', 'Aucun article ne correspond à votre recherche')
            ->with('search', $search);
        } else {
            return view('front.search', compact('articles', 'search'))
            ->with('posts', $posts)
            ->with('search', $search);
        }
    }

}
