@extends('layouts.admin')
@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <nav>
        @include('partials.studentNav')
    </nav>
    <div class="col-md-6 col-md-offset-3">
        <h3 class="title-question"><span>Question</span> : <b>{{$question->content}}</b></h3>
        <form method="POST" action="{{url('qcm', [$question->id, 'edit'])}}" class="form-qcm">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            @forelse($question->choices as $index => $choice)
                <div class="title form-group">
                        <label for="cbox{{$index}}" class="form-check-label"><input class="form-check-input" type="checkbox" name="reponse_{{$choice->id}}" id="cbox{{$index}}" value="true">
                        {{$choice->content}}
                        </label>
                </div>
            @empty
                <p>pas de reponse</p>
            @endforelse
            <div class="container-btn">
                <br><input type="submit" value="Valider" class="btn-validate">
                <a href="{{url("qcm")}}" class="btn-delete">Annuler</a>
            </div>
        </form>
    </div>


@endsection
