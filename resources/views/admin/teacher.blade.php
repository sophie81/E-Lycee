@extends('layouts.admin')
@section('content')
    <nav>
        @include('partials.teacherNav')
    </nav>
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <div class="col-md-4 list-post">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                        <a data-toggle="collapse" href="#collapse1"><h2 class="panel-title">Gestion des articles </h2></a>
                   
                </div>
                <div id="collapse1" class="panel-collapse collapse list">
                     @forelse($posts as $post)
                        <h3><a href="{{url('post',[$post->id, 'edit'])}}">{{$post->title}}</a></h3>
                    @empty
                        <p>Pas d'article </p>
                    @endforelse
                    <a href="{{url('post')}}" class="see-more">Voir tout les articles</a>
                </div>
            </div>	    
        </div>
    </div>
@endsection