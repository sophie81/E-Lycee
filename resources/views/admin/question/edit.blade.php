@extends('layouts.admin')
@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h1 class="h1-form">Modifier votre question !</h1>
    <nav>
        @include('partials.teacherNav')
    </nav>
    <form action="{{url('question', [$question->id])}}" method="POST" class="ml100">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH">
        <div>
            <label>Sélectionnez le niveau de la question :</label>
            <select name="class_level">
                <option {{$question->class_level=='first_class' ? 'selected' : ''}} value="first_class">first_class</option>
                <option {{$question->class_level=='final_class' ? 'selected' : ''}} value="final_class">final_class</option>
            </select>
        </div>
        <div class="title">
            <label>Entrer un titre:</label>
            <input type="text" name="title" value="{{$question->title}}">
            @if($errors->has('title'))
                <p><span class="error">{{$errors->first('title')}}</span></p>
            @endif
        </div>
        <div class="content-post">
            <label>Entrer le contenu de la question :</label>
            <textarea name="content">{{$question->content}}</textarea>
            @if($errors->has('content'))
                <p><span class="error">{{$errors->first('content')}}</span></p>
            @endif
        </div>
        <div class="container-btn">
            <br><input type="submit" value="Modifier" class="btn-validate">
            <a href="{{url("question")}}" class="btn-delete">Annuler</a>
        </div>
    </form>
@endsection
