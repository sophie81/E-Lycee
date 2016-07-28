<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\QuestionRequest;

use App\Question;
use App\Choice;

class QuestionController extends Controller
{
    private $paginate = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $title = 'Question';
        $questions = Question::with('scores', 'choices')->paginate($this->paginate);

        return view('admin.question.index', compact('questions', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $question = Question::create($request->all());
        for($i = 0; $i < $request->input(['nb_choice']); $i++){
            Choice::create(['question_id' => $question->id]);
        }

        return redirect()->action('ChoiceController@edit', $question->id);
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

    public function changeStatusQuestion($id)
    {
        $post = Post::findOrFail($id);
        $title = $post->title;

        $status = $post->status=='published'? 'unpublished' : 'published';
        $post->status = $status;
        $post->save();

        return redirect('post')->with(['message'=>'Le status a été modifié.']);
    }
}
