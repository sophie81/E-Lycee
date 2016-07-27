@extends('layouts.master')

@section('title', $title)

@section('content')
    <div class="col-md-9">
        <h2 class="title">Bienvenue sur E-lycée</h2>
        @forelse($posts as $post)
            <div class="post row">
                <div class="col-sm-6 post-img">
                    <img src="{{$post->url_thumbnail}}"> 
                </div>  
                <div class="description col-sm-6">
                    <h3><a href="{{url('actualite',[$post->id])}}">{{$post->title}}</a></h3>
                    <p>{{$post->abstract}}</p>
                    @if($post->date)
                        <p><b>Plublié le :</b> {{$post->date->format('d/m/Y')}}</p>
                    @endif
                    @if($post->user)
                        <p>Ecrit par : {{$post->user->username}}</p>
                    @else
                        pas d'auteur
                    @endif
                    <div class="link">
                        <a href="{{url('actualite',[$post->id])}}" class="read-more">
                            <span>
                                <span>></span>
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
        <h3>A lire aussi</h3>
    </div>
@endsection
