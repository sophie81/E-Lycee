@extends('layouts.admin')

@section('content')
    <nav>
        <li><a href="{{url('post')}}">Mes articles</a></li>
        <li><a href="{{url('post','create')}}">Créer un article</a></li>
    </nav>
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <div class="list-post">
    	<h2>Gestion des articles</h2>
	    @forelse($posts as $post)
	        <h3><a href="{{url('post',[$post->id, 'edit'])}}">{{$post->title}}</a></h3>
	    @empty
	        <p>Pas d'article </p>
	    @endforelse
	    <a href="{{url('post')}}">Voir tout les articles</a>
    </div>
@endsection