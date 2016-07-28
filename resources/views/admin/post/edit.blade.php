@extends('layouts.admin')

@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h1 class="h1-form">Modification d'article</h1>
    <nav>
        @include('partials.teacherNav')
    </nav>
    <form method="POST" action="{{url('post', $post->id)}}" enctype="multipart/form-data" class="form-create">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="user_id" value="{{$userId}}">
        <div class="title">
        <label>Titre :</label>
        <input type="text" name="title" value="{{$post->title}}">
        @if($errors->has('title'))
            <p><span class="error">{{$errors->first('title')}}</span></p>
        @endif
        </div>
        <div class="content-post">
            <label>Extrait :</label>
            <textarea name="abstract">{{$post->abstract}}</textarea>
            @if($errors->has('abstract'))
                <p><span class="error">{{$errors->first('abstract')}}</span></p>
            @endif
        </div>
        <div class="content-post">
            <label>Contenu :</label>
            <textarea name="content">{{$post->content}}</textarea>
            @if($errors->has('content'))
                <p><span class="error">{{$errors->first('content')}}</span></p>
            @endif
        </div>
        <div class="photo">
            <label>Photo :</label>
            <input type="text" name="url_thumbnail" value="{{$post->url_thumbnail}}">
        </div>
        <div class="date">
            <label>Date :</label>
            <input type="date" name="date" value="{{$post->date->format('Y-m-d')}}">
            <p><label for="status">Publier l'article:</label> <input {{$post->status=='published'? 'checked' : ''}} id="status" type="checkbox" name="status" value="published"></p>
        </div>
        <div class="container-btn">
            <br><input type="submit" value="Mettre à jour" class="btn-validate">
            <a href="{{url("post")}}" class="btn-delete">Annuler</a>
        </div>
    </form>
@endsection
