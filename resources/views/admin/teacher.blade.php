@extends('layouts.admin')

@section('content')
    <nav>
        <li><a href="{{url('post')}}">Mes articles</a></li>
        <li><a href="{{url('post','create')}}">Créer un article</a></li>
        <li><a href="{{url('logout')}}">Se déconnecter</a></li>
    </nav>
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <p> Page accueil teacher</p>
@endsection