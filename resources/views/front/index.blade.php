@extends('layouts.master')

@section('title', $title)

@section('content')
    @forelse($posts as $post)
        <h3><a href="{{url('actualite',[$post->id])}}">{{$post->title}}</a></h3>
        <img src="{{$post->url_thumbnail}}" style="max-width:400px;">
        <div class="txtleft">
            <p>{{$post->content}}</p>
            @if($post->date)
                <p><b>Plublié le :</b> {{$post->date->format('d/m/Y')}}</p>
            @endif
        </div>
    @empty
        <p>Pas d'article </p>
    @endforelse
@endsection
