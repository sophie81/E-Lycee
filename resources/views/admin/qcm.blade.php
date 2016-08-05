@extends('layouts.admin')

@section('content')
    <nav>
        @include('partials.studentNav')
    </nav>
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h2 class="title-h2">{{$title}}</h2>
    <table class="table table-question">
        <thead>
        <tr>
            <th>Questions</th>
        </tr>
        </thead>
        @forelse($questions as $question)
        <tr>
            <td>
                <button class="btn btn-valid {{$scores_user->where("question_id", $question->id)->first()->status_question=='no'? 'red' : 'green'}}"></button>
                @if($scores_user->where("question_id", $question->id)->first()->status_question=='no')
                    <a href="{{url('qcm', [$question->id, 'edit'])}}" class="student-question">{{$question->title}}</a>
                @else
                    <span>{{$question->title}}</span>
                @endif
            </td>
        </tr>
        @empty
            <p>Pas de question disponibles pour le moment </p>
        @endforelse
    </table>
@endsection