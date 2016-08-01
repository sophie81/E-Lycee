@extends('layouts.admin')
@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h1 class="h1-form">Entrez vos réponses !</h1>
    <nav>
        @include('partials.teacherNav')
    </nav>
    <div class="col-md-6 col-md-offset-3">
        <h3 class="title-question"><span>Question</span> : {{$question->content}}</h3>
        <form method="POST" action="{{url('question', [$question->id, 'choice'])}}" class="form-create">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            @forelse($question->choices as $index => $choice)
                <input type="hidden" name="choice_id_{{$choice->id}}" value="{{$choice->id}}">
            <div class="title form-group">
                <label>Réponse {{$index + 1}} : </label>
                <textarea name="content_{{$choice->id}}" class="form-control">{{$choice->content}}</textarea>
                @if($errors->has('content'))
                    <p><span class="error">{{$errors->first('content')}}</span></p>
                @endif
            </div>
            <div class="form-check">
                <label for="cbox1" class="form-check-label"><input class="form-check-input" {{$choice->status=='true'? 'checked' : ''}} type="radio" name="status_{{$choice->id}}" id="cbox1" value="true">Vrai</label>

            </div>
            <div class="form-check">
                <label for="cbox2" class="form-check-label"><input class="form-check-input" {{$choice->status=='false'? 'checked' : ''}} type="radio" name="status_{{$choice->id}}" id="cbox2" value="false">Faux</label>
            </div>
            @empty
                <p>pas de reponse</p>
            @endforelse
            <div class="container-btn">
                <br><input type="submit" value="Valider" class="btn-validate">
                <a href="{{url("question")}}" class="btn-delete">Annuler</a>
            </div>
        </form>
    </div>


@endsection