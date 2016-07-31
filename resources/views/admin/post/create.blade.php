@extends('layouts.admin')
@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h1 class="h1-form">Créer votre article !</h1>
    <nav>
        @include('partials.teacherNav')
    </nav>
    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="{{url('post')}}" enctype="multipart/form-data" class="form-create">
            {{csrf_field()}}
            <input type="hidden" name="user_id" value="{{$userId}}">
            <div class="form-group">
                <label>Entrer un titre:</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control">
                @if($errors->has('title'))
                    <p><span class="error">{{$errors->first('title')}}</span></p>
                @endif
            </div>
            <div class="form-group content-post">
                <label>Entrer un extrait:</label>
                <textarea name="abstract" class="form-control">{{old('abstract')}}</textarea>
                @if($errors->has('abstract'))
                    <p><span class="error">{{$errors->first('abstract')}}</span></p>
                @endif
            </div>
            <div class="form-group">
                <label>Entrer un contenu:</label>
                <textarea name="content" class="form-control">{{old('content')}}</textarea>
                @if($errors->has('content'))
                    <p><span class="error">{{$errors->first('content')}}</span></p>
                @endif
            </div>
            <div class="form-group date">
                <label>Entrer la date:</label>
                <input type="date" name="date" class="form-control"></p>
            </div>
            <div class="form-group photo">
                <label>Entrer l'url de votre image:</label><br>
                <input type="text" name="url_thumbnail" class="form-control">
            </div>
            <div class="form-group container-btn">
                <br><input type="submit" value="Créer" class="btn-validate">
                <a href="{{url("post")}}" class="btn-delete">Annuler</a>
            </div>
        </form>
    </div>
@endsection
