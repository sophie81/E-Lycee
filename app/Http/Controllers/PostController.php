<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PostRequest;

use Auth;
use App\Post;
use App\Comment;

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
        $posts = Post::with('comments', 'user')->paginate($this->paginate);

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
        $post = Post::create($request->all());

        /*$im = $request->file('picture');

        // refactoring voir plus bas la méthode private upload
        if (!empty($im))
            $this->upload($im, $request->input('name'), $post->id);*/

        return redirect('post')->with(['message'=>'Article crée avec un succès']);
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
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $title = $post->title;

        $post->delete();

        return redirect('post')->with(['message'=>sprintf('L\'article %s a été supprimé avec succès.', $title)]);
    }

    public function changeStatus($id)
    {
        $post = Post::findOrFail($id);
        $title = $post->title;

        $status = $post->status=='published'? 'unpublished' : 'published';
        $post->status = $status;
        $post->save();

        return redirect('post')->with(['message'=>'Le status a été modifié.']);
    }
}
