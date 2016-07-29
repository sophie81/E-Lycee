@extends('layouts.admin')
@section('content')
    <nav>
        @include('partials.teacherNav')
    </nav>
    @if(Session::has('message'))
        <div class="msg">{{Session::get('message')}}</div>
    @endif
    <div class="col-md-4 list-post">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <a data-toggle="collapse" href="#collapse1"><h2 class="panel-title">Gestion des articles </h2></a>
                </div>
                <div id="collapse1" class="panel-collapse collapse list">
                     @forelse($posts as $post)
                        <button class="btn btn-valid {{$post->status=='unpublished'? 'red' : 'green'}}">
                        </button>
                        <h3><a href="{{url('post',[$post->id, 'edit'])}}">{{$post->title}}</a></h3>
                    @empty
                        <p>Pas d'article </p>
                    @endforelse
                    <a href="{{url('post')}}" class="see-more">Voir tout les articles</a>
                </div>
            </div>	    
        </div>
    </div>
    <div class="col-md-4 list-post">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" href="#collapse2"><h2 class="panel-title">Gestion des questions </h2></a>
                </div>
                <div id="collapse2" class="panel-collapse collapse list">
                     @forelse($questions->take(3) as $question)
                        <button class="btn btn-valid {{$question->status=='unpublished'? 'red' : 'green'}}">
                        </button>
                        <h3><a href="{{url('question',[$question->id, 'edit'])}}">{{$question->title}}</a></h3>
                    @empty
                        <p>Pas de question </p>
                    @endforelse
                    <a href="{{url('question')}}" class="see-more">Voir toutes les questions</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 list-post">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle="collapse" href="#collapse3"><h2 class="panel-title"> Statistiques </h2></a>
                </div>
                <div id="collapse3" class="panel-collapse collapse list">
                    <p>{{$comments->count()}} commentaires</p>
                    <p>{{$questions->count()}} questions</p>
                </div>
            </div>
        </div>
    </div>
@endsection