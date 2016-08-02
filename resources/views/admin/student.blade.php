@extends('layouts.admin')

@section('content')
    <nav>
        @include('partials.studentNav')
    </nav>
	@if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    @if($questions->count() > 0)
    <h3>Vous avez répondu à {{$user->scores->where('status_question', 'yes')->count()}}/{{$questions->count()}} question(s)</h3>
    <h3>Votre score : {{$user->scores->sum('note')}} / {{$count}} </h3>
    @else
        <p> Il n'y a pas de question attribué à votre classe pour le moment.</p>
    @endif
@endsection