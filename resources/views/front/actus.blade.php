@extends('layouts.master')

@section('title', $title)

@section('content')
    <h2 class="title-h2">Retrouver les actus à propos des maths!</h2>
    @forelse($posts as $post)
        <div class="col-md-4 col-sm-6 col-xs-12 actu-post">
            <h3><a href="{{url('actualite',[$post->id])}}">{{$post->title}}</a></h3>
            @if($post->url_thumbnail)
                <a href="{{url('actualite',[$post->id])}}" class="link-post" style="background-image:url({{$post->url_thumbnail}});">
            @else
                <a href="{{url('actualite',[$post->id])}}" class="link-post" style="background-image:url({{'images/fb-like.jpg'}});">
            @endif
            <div class="txt-description">
                <p>{{$post->abstract}}</p>
                @if($post->date)
                    <p><b>Publié le :</b> {{$post->date->format('d/m/Y')}}</p>
                @endif
                    <p>Ecrit par : {{$post->user->username}}</p>
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
