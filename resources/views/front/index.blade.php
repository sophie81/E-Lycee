@extends('layouts.master')

@section('title', $title)

@section('content')
    <div class="col-md-9">
        <h2 class="title-h2">Les dernières actualités</h2>
        @forelse($posts as $post)
            <div class="post row">
                <div class="col-sm-6 post-img">
                    <img src="{{$post->url_thumbnail}}"> 
                </div>  
                <div class="description col-sm-6">
                    <h3><a href="{{url('actualite',[$post->id])}}">{{$post->title}}</a></h3>
                    <p class="excerpt">{{$post->abstract}}</p>
                    @if($post->date)
                        <p class="date"><b>Publié le :</b> {{$post->date->format('d/m/Y')}}</p>
                    @endif
                    @if($post->user)
                        <p class="autor"><b>Ecrit par :</b> {{$post->user->username}}</p>
                    @else
                        Pas d'auteur
                    @endif
                    @if($post->comments)
                        <p class="comment">{{$post->comments->count()}} commentaire(s)</p>
                    @else
                        0 commentaire
                    @endif
                    <div class="link">
                        <a href="{{url('actualite',[$post->id])}}" class="read-more">
                            <span>
                                <span>+</span>
                                Lire la suite
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p>Pas d'article </p>
        @endforelse
    </div>
    <div class="col-md-3 home-sidebar">
        <h2 class="title-h2">A lire aussi</h2>
        <div class="content-read-more">
            @forelse($other as $otherPost)
                <div class="read-more">
                    <h3 class="more-post"><a href="{{url('actualite',[$otherPost->id])}}">{{$otherPost->title}}</a></h3>
                    <p>{{$otherPost->abstract}}</p>
                    @if($otherPost->date)
                        <p><b>Publié le :</b> {{$otherPost->date->format('d/m/Y')}}</p>
                    @endif
                </div>
            @empty
                <p>Pas d'article </p>
            @endforelse
        </div>
    </div>
@endsection
