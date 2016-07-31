@extends('layouts.admin')

@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <nav>
        @include('partials.teacherNav')
    </nav>
    <div class="col-md-6 col-md-offset-3 content-form">
        <h1 class="h1-form">Modification d'article</h1>
        <form method="POST" action="{{url('post', $post->id)}}" enctype="multipart/form-data" class="form-create">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="user_id" value="{{$userId}}">
            <div class="title form-group">
                <label>Titre :</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control">
                @if($errors->has('title'))
                    <p><span class="error">{{$errors->first('title')}}</span></p>
                @endif
            </div>
            <div class="content-post form-group">
                <label>Extrait :</label>
                <textarea name="abstract" class="form-control">{{$post->abstract}}</textarea>
                @if($errors->has('abstract'))
                    <p><span class="error">{{$errors->first('abstract')}}</span></p>
                @endif
            </div>
            <div class="content-post form-group">
                <label>Contenu :</label>
                <textarea name="content" class="form-control">{{$post->content}}</textarea>
                @if($errors->has('content'))
                    <p><span class="error">{{$errors->first('content')}}</span></p>
                @endif
            </div>
            <div class="photo form-group">
                <label>Photo :</label>
                <input type="text" name="url_thumbnail" value="{{$post->url_thumbnail}}" class="form-control">
            </div>
            <div class="date form-group">
                <label>Date :</label>
                <input type="date" name="date" value="{{$post->date->format('Y-m-d')}}" class="form-control">
            </div>
            <div class="form-group">
                <p><label for="status">Publier l'article:</label> <input {{$post->status=='published'? 'checked' : ''}} id="status" type="checkbox" name="status" value="published"></p>
            </div>
            <div class="container-btn">
                <br><input type="submit" value="Mettre à jour" class="btn-validate">
                <a href="{{url("post")}}" class="btn-delete">Annuler</a>
            </div>
        </form>
    </div>
@endsection
