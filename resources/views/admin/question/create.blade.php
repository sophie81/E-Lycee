@extends('layouts.admin')
@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h2 class="title-h2">Créer votre question</h2>
    <nav>
        @include('partials.teacherNav')
    </nav>
    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="{{url('question')}}" class="form-create">
            {{csrf_field()}}
            <div class="form-inline form-group">
                <label>Sélectionnez la classe :</label>
                <select name="class_level" class="form-control level">
                    <option value="first_class">Première S</option>
                    <option value="final_class">Terminale S</option>
                </select>
                <label>Nombre de réponses :</label>
                <select name="nb_choice" class="form-control">
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <label>Entrer un titre:</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control">
                @if($errors->has('title'))
                    <p><span class="error">{{$errors->first('title')}}</span></p>
                @endif
            </div>
            <div class="content-post form-group">
                <label>Entrer le contenu de la question :</label>
                <textarea name="content" class="form-control">{{old('content')}}</textarea>
                @if($errors->has('content'))
                    <p><span class="error">{{$errors->first('content')}}</span></p>
                @endif
            </div>
            <div class="container-btn">
                <input type="submit" value="Valider" class="btn-validate">
                <a href="{{url("question")}}" class="btn-delete">Annuler</a>
            </div>
        </form>
    </div>
@endsection
