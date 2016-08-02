@extends('layouts.master')

@section('title', $title)

@section('content')
    <div class="col-xs-12 page-contact">
        <h2>Nous contacter</h2>
        <form action="/" method="post">
        	<div class="form-group">
            	<input type="text" id="nom" placeholder="Nom" class="form-control"/>
            </div>
            <div class="form-group">
            	<input type="email" id="courriel" placeholder="E-mail" class="form-control"/>
            </div>
            <div class="form-group">
            	<textarea id="message" placeholder="Message" class="form-control"></textarea>
            </div>
            <div class="button"><button type="submit">Envoyer</button></div>
        </form>
    </div>
@endsection
