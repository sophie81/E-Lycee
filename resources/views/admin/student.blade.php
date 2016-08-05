@extends('layouts.admin')

@section('content')
    <nav>
        @include('partials.studentNav')
    </nav>
	@if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <div class="col-md-6 col-md-offset-3 list-post">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <a data-toggle="collapse" href="#collapse1"><h2 class="panel-title">Gestion des articles </h2></a>
                </div>
                <div id="collapse1" class="panel-collapse collapse in list">
                    @if($questions->count() > 0)
                        <h3>Vous avez répondu à {{$user->scores->where('status_question', 'yes')->count()}}/{{$questions->count()}} question(s)</h3>
                        <h3 class="score">Votre score : {{$user->scores->sum('note')}} / {{$count}} </h3>
                    @else
                        <p> Il n'y a pas de question attribué à votre classe pour le moment.</p>
                    @endif
                </div>
            </div>      
        </div>
    </div>
@endsection