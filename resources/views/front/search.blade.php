@extends('layouts.master')

@section('content')
<div class="col-xs-12">
	<h2 class="title-search">Resultat pour la recherche: <span>{{$query}}</span></h2>
</div>
<div class="col-md-10 col-md-offset-1">
	@if(isset($message))
		<p>{{$message}}</p>
	@endif
	@if(isset($posts))
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
	@endif
</div>
@endsection