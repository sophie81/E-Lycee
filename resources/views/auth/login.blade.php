@extends('layouts.master')

@section('content')
    <div class="col-sm-6 col-sm-offset-3 form">
        @if(Session::has('message'))
            <p>{{Session::get('message')}}</p>
        @endif
        <h2>Connectez-vous</h2>
        <form method="POST" action="{{url('login')}}" class="login">
            {{ csrf_field() }}
            <div class="mb10">
                <label>Identifiant </label><br>
                <input type="text" name="username" value="">
                @if($errors->has('username'))
                    <p><span class="error">{{$errors->first('username')}}</span></p>
                @endif
            </div>
            <div class="mb10">
                <label>Mot de passe </label><br>
                <input type="password" name="password" id="password">
                @if($errors->has('password'))
                    <p><span class="error">{{$errors->first('password')}}</span></p>
                @endif
            </div>
            <div class="mb20">
                <input id="remember" type="radio" name="remember" value="remember"> Se rappeler de moi
            </div>
            <div>
                <button type="submit" class="btn btn-valid">Connexion</button>
            </div>
        </form>
    </div>
@endsection