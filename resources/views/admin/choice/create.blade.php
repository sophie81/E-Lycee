@extends('layouts.admin')
@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h1 class="h1-form">Entrez vos réponses !</h1>
    <nav>
        @include('partials.teacherNav')
    </nav>
    <h3>Question :</h3>
    <p>{{$question->content}}</p>
    <form method="POST" action="{{url('choice')}}" class="form-create">
        {{csrf_field()}}
        @forelse($question->choices as $index => $choice)
        <div class="title">
            <label>Réponse {{$index + 1}} : </label>
            <textarea name="content">{{old('content')}}</textarea>
            @if($errors->has('content'))
                <p><span class="error">{{$errors->first('content')}}</span></p>
            @endif
        </div>
        <div>
            <input type="checkbox" name="status" id="cbox1" value="true"> <label for="cbox1">Vrai</label>
            <input type="checkbox" name="status" id="cbox2" value="false"> <label for="cbox2">Faux</label>
        </div>
        @empty
            <p>pas de reponse</p>
        @endforelse
        <div class="container-btn">
            <br><input type="submit" value="Créer" class="btn-validate">
            <a href="{{url("post")}}" class="btn-delete">Annuler</a>
        </div>
    </form>
@endsection
