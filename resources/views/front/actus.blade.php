@extends('layouts.master')

@section('title', $title)

@section('content')
    {{ $posts->links() }}
    @forelse($posts as $post)
        <h3><a href="{{url('actualite',[$post->id])}}">{{$post->title}}</a></h3>
        <img src="{{$post->url_thumbnail}}" width="200px">
        <div class="txtleft">
            <p>{{$post->content}}</p>
            @if($post->date)
                <p><b>Plublié le :</b> {{$post->date->format('d/m/Y')}}</p>
            @endif
            @if($post->user)
                <p>Ecrit par : {{$post->user->username}}</p>
            @else
                pas d'auteur
            @endif
        </div>
    @empty
        <p>Pas d'article </p>
    @endforelse
    {!! $posts->links() !!}
@endsection
