@extends('layouts.master')

@section('title', $title)

@section('content')
    <div class="col-xs-12 page-contact">
        <h2>Nous contacter</h2>
        <form action="/" method="post">
            <input type="text" id="nom" placeholder="Nom"/>
            <input type="email" id="courriel" placeholder="E-mail"/>
            <textarea id="message" placeholder="Message"></textarea>
            <div class="button"><button type="submit">Envoyer</button></div>
        </form>
    </div>
@endsection
