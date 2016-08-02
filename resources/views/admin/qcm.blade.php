@extends('layouts.admin')

@section('content')
    <nav>
        @include('partials.studentNav')
    </nav>
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h2>{{$title}}</h2>
    @forelse($questions as $question)

        <h3><button class="btn btn-valid {{$scores_user->where("question_id", $question->id)->first()->status_question=='no'? 'red' : 'green'}}">
            </button>
            @if($scores_user->where("question_id", $question->id)->first()->status_question=='no')
                <a href="{{url('qcm', [$question->id, 'edit'])}}">{{$question->title}}</a>
            @else
                <p>{{$question->title}}</p>
            @endif
        </h3>
    @empty
        <p>Pas de question disponibles pour le moment </p>
    @endforelse
@endsection