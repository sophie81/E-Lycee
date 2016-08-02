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
        $questions = Question::with('score', 'choices')->paginate($this->paginate);

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
        $question = Question::findOrFail($id);

        return view('admin.question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, $id)
    {
        $question = Question::findOrFail($id);
        $question->update($request->all());

        return redirect('question')->with(['message'=>'Mise à jour de la question avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $title = $question->title;

        $question->delete();

        return redirect('question')->with(['message'=>sprintf('La question %s a été supprimé avec succès.', $title)]);
    }

    public function changeStatusQuestion($id)
    {
        $question = Question::findOrFail($id);
        $title = $question->title;

        $status = $question->status=='published'? 'unpublished' : 'published';
        $question->status = $status;
        $question->save();

        return redirect('question')->with(['message'=>sprintf('Le status de la question %s a été modifié.', $title)]);
    }
}
