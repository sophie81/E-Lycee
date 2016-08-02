@extends('layouts.master')

@section('title', $title)
@section('content')
    @if(!empty($post))
        <div class="col-xs-12 single-post">
            <h2>{{$post->title}}</h2>
            <img src="{{$post->url_thumbnail}}">
            <div class="txtdescription">
                <p class="content">{{$post->content}}</p>
                <p>
                @if($post->user)
                    <b>Auteur :</b> <span class="pink">{{$post->user->username}} <span class="black">|</span></span>
                @endif
                @if($post->date)
                    <b>Plublié le :</b> <span class="pink">{{$post->date->format('d/m/Y')}}</span></p>
                @endif
            </div>
        </div>
        <div class="col-xs-12 comments">
            <div class="comment-list">
                @if($post->comments)
                    <h3>{{$post->comments->count()}} commentaire(s)</h3>
                @else
                    0 commentaire
                @endif
                @forelse($post->comments as $comment)
                    <div class="single-comment">
                        <h4>{{$comment->title}} 
                            <span>le</span>
                            @if($comment->date)
                                {{$comment->date->format('d/m/Y')}}
                            @endif
                        </h4>
                        <div class="txt-comment">
                            <p>{{$comment->content}}</p>
                        </div>
                    </div>
                @empty
                    <p>0 commentaire </p>
                @endforelse
            </div>
            <div class="form-comment">
                <h3>Ajouter un commentaire</h3>
                <form action="{{url('comment')}}" method="POST" class="col-md-6">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="title" id="nom" placeholder="Pseudo" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="content" placeholder="Votre message" class="form-control"></textarea>
                    </div>
                    <input type="hidden" name="date" value="{{date('Y-m-d H:i:s')}}">
                    <input type="hidden" name="post_id" value="{{$post->id}}">

                    <div class="button">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    @else
        <p>Pas d'article</p>
    @endif
@endsection
