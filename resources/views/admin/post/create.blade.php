@extends('layouts.admin')
@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h1 class="h1-form">Créer votre article !</h1>
    <form method="POST" action="{{url('post')}}" enctype="multipart/form-data" class="form-create">
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="{{$userId}}">
        <div class="title">
            <label>Entrer un titre:</label>
            <input type="text" name="title" value="{{old('title')}}">
            @if($errors->has('title'))
                <p><span class="error">{{$errors->first('title')}}</span></p>
            @endif
        </div>
        <div class="content-post">
            <label>Entrer un extrait:</label>
            <textarea name="abstract">{{old('abstract')}}</textarea>
            @if($errors->has('abstract'))
                <p><span class="error">{{$errors->first('abstract')}}</span></p>
            @endif
            <label>Entrer un contenu:</label>
            <textarea name="content">{{old('content')}}</textarea>
            @if($errors->has('content'))
                <p><span class="error">{{$errors->first('content')}}</span></p>
            @endif
        </div>
        <div class="date">
            <label>Entrer la date:</label>
            <input type="date" name="date"></p>
        </div>
        <div class="photo">
            <label>Entrer un nom pour votre image:</label><input type="text" name="name"><br>
            <input type="file" name="picture">
        </div>
        <div class="container-btn">
            <br><input type="submit" value="Créer" class="btn-validate">
            <a href="{{url("post")}}" class="btn-delete">Annuler</a>
        </div>
    </form>
@endsection
