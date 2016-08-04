<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PostRequest;

use Auth;
use App\Post;

class PostController extends Controller
{
    private $paginate = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $title = 'Post';
        $posts = Post::with('comments', 'user')
            ->orderBy('date', 'desc')
            ->paginate($this->paginate);

        return view('admin.post.index', compact('posts', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId = Auth::user()->id;

        return view('admin.post.create', compact('comments','userId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        Post::create($request->all());

        return redirect('post')->with('message', 'Article crée avec un succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $userId = Auth::user()->id;

        return view('admin.post.edit', compact('post','userId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return redirect('post')->with(['message'=>'Mise à jour de l\'article avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($posts)
    {
        foreach($posts->input('ck') as $id) {
            $post = Post::findOrFail($id);
            $post->delete();
        }
    }

    public function publish($posts)
    {
        foreach($posts->input('ck') as $id) {
            $post = Post::findOrFail($id);
            $post->status = 'published';
            $post->save();
        }
    }

    public function unpublish($posts)
    {
        foreach($posts->input('ck') as $id) {
            $post = Post::findOrFail($id);
            $post->status = 'unpublished';
            $post->save();
        }
    }

    public function action(Request $request){
        $action = $request->input('action');
        switch($action){
            case "publish":
                $this->publish($request);
                $title = "publié";
                break;
            case "unpublish":
                $this->unpublish($request);
                $title = "dépublié";
                break;
            case "delete":
                $this->destroy($request);
                $title = "supprimé";
                break;
        }
        return redirect('post')->with(['message'=>sprintf('Les articles ont été %s', $title)]);
    }
}
