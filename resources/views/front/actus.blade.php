@extends('layouts.master')

@section('title', $title)

@section('content')
    @forelse($posts as $post)
        <div class="col-md-4 col-sm-6 col-xs-12 actu-post">
            <h3><a href="{{url('actualite',[$post->id])}}">{{$post->title}}</a></h3>
            <a href="{{url('actualite',[$post->id])}}" class="link-post" style="background-image:url({{$post->url_thumbnail}});">
            <div class="txt-description">
                <p>{{$post->content}}</p>
                @if($post->date)
                    <p><b>Plublié le :</b> {{$post->date->format('d/m/Y')}}</p>
                @endif
                @if($post->user)
                    <p>Ecrit par : {{$post->user->username}}</p>
                @else
                    pas d'auteur
                @endif
                @if($post->comments)
                    <p>{{$post->comments->count()}} commentaire(s)</p>
                @else
                    0 commentaire
                @endif
            </div>
            </a>
        </div>
    @empty
        <p>Pas d'article </p>
    @endforelse
    <div class="row content-pagination">
        <div class="col-xs-12">
            {!! $posts->links() !!}
        </div>
    </div>
@endsection
