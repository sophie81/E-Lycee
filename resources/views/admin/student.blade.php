@extends('layouts.admin')

@section('content')
	@if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <p> Page accueil élève</p>
@endsection