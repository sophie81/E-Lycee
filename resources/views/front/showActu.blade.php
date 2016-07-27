@extends('layouts.master')

@section('title', $title)
@section('content')
    @if(!empty($post))
        <article>
            <h2>{{$post->title}}</h2>
            <img src="{{$post->url_thumbnail}}">
            <div class="txtleft">
                <p>{{$post->content}}</p>
                @if($post->user)
                    <p><b>Auteur :</b> <a href="{{url('user',[$post->user->id])}}">{{$post->user->name}}</a></p>
                @endif
                @if($post->published_at)
                    <p><b>Plublié le :</b> {{$post->published_at->format('d/m/Y')}}</p>
                @endif
            </div>
        </article>
    @else
        <p>Pas d'article</p>
    @endif
@endsection
