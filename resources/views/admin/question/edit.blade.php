@extends('layouts.admin')
@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h2 class="title-h2">Modification de question</h2>
    <nav>
        @include('partials.teacherNav')
    </nav>
    <div class="col-md-6 col-md-offset-3">
        <form action="{{url('question', [$question->id])}}" method="POST" class="ml100">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                @if(isset($question->score))
                    <p><label>Classe :</label> {{$question->class_level=='first_class' ? 'Première S' : 'Terminale S'}}</p>
                @else
                    <label>Sélectionnez la classe :</label>
                    <select name="class_level" class="form-control">
                        <option {{$question->class_level=='first_class' ? 'selected' : ''}} value="first_class">Première S</option>
                        <option {{$question->class_level=='final_class' ? 'selected' : ''}} value="final_class">Terminale S</option>
                    </select>
                @endif
            </div>
            <div class="form-group">
                <label>Entrer un titre:</label>
                <input type="text" name="title" value="{{$question->title}}" class="form-control">
                @if($errors->has('title'))
                    <p><span class="error">{{$errors->first('title')}}</span></p>
                @endif
            </div>
            <div class="content-post form-group">
                <label>Entrer le contenu de la question :</label>
                <textarea name="content" class="form-control">{{$question->content}}</textarea>
                @if($errors->has('content'))
                    <p><span class="error">{{$errors->first('content')}}</span></p>
                @endif
            </div>
            <div class="container-btn">
                <br><input type="submit" value="Modifier" class="btn-validate">
                <a href="{{url("question")}}" class="btn-delete">Annuler</a>
            </div>
        </form>
    </div>
@endsection
