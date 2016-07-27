@extends('layouts.master')

@section('title', $title)

@section('content')
    <form action="/" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" />
        </div>
        <div>
            <label for="courriel">E-mail :</label>
            <input type="email" id="courriel" />
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message"></textarea>
        </div>

        <div class="button">
            <button type="submit">Envoyer</button>
        </div>
    </form>

@endsection
