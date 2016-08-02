@extends('layouts.master')

@section('title', $title)

@section('content')
    <div class="col-xs-12 page-contact">
        <h2>Nous contacter</h2>
        @if(Session::has('message'))
            <p class="msg">{{Session::get('message')}}</p>
        @endif
        <form action="{{url('contact_mail')}}" method="POST">
            {{ csrf_field() }}
        	<div class="form-group">
            	<input type="text" name="nom" placeholder="Nom" class="form-control"/>
                @if($errors->has('nom'))
                    <p><span class="error">{{$errors->first('nom')}}</span></p>
                @endif
            </div>
            <div class="form-group">
            	<input type="email" name="email" placeholder="E-mail" class="form-control"/>
                @if($errors->has('email'))
                    <p><span class="error">{{$errors->first('email')}}</span></p>
                @endif
            </div>
            <div class="form-group">
            	<textarea name="message" placeholder="Message" class="form-control"></textarea>
                @if($errors->has('message'))
                    <p><span class="error">{{$errors->first('message')}}</span></p>
                @endif
            </div>
            <div class="button"><button type="submit">Envoyer</button></div>
        </form>
    </div>
@endsection
