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
                    <p><b>Auteur :</b> <a href="{{url('user',[$post->user->id])}}">{{$post->user->username}}</a></p>
                @endif
                @if($post->date)
                    <p><b>Plublié le :</b> {{$post->date->format('d/m/Y')}}</p>
                @endif
            </div>
        </article>
        <h3>Commentaires</h3>
        @forelse($post->comments as $comment)
            <h4>{{$comment->title}}</h4>
            <div class="txtleft">
                <p>{{$comment->content}}</p>
                @if($comment->date)
                    <p><b>Plublié le :</b> {{$comment->date->format('d/m/Y')}}</p>
                @endif
            </div>
        @empty
            <p>0 commentaire </p>
        @endforelse
        <form action="{{url('comment')}}" method="POST">
            {{csrf_field()}}
            <legend>Ajouter un commentaire</legend>
            <div>
                <label for="nom">Pseudo :</label>
                <input type="text" id="nom" />
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message"></textarea>
            </div>

            <div class="button">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    @else
        <p>Pas d'article</p>
    @endif
@endsection
