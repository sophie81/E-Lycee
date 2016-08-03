<?php

namespace App\Http\Controllers;

use App\Choice;
use Illuminate\Http\Request;
use App\Http\Requests\ChoiceRequest;
use App\Http\Requests;
use App\Question;

class ChoiceController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.choice.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChoiceRequest $request, $id)
    {
        $choices = Choice::where('question_id', '=', $id)->get();
        foreach($choices as $item){
            $choice = $request->only(["content_{$item->id}", "status_{$item->id}"]);
            $item->content = $choice["content_{$item->id}"];
            $item->status = $choice["status_{$item->id}"];
            $item->save();
        }

        return redirect('question')->with(['message'=>'Mise à jour de la question avec succès']);
    }

}
