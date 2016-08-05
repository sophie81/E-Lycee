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
            @forelse($question->choices as $index => $choice)
                <div class="title form-group">
                    <p class="{{$choice->status=='false'? 'false' : 'true'}}">
                        {{$choice->content}}
                    </p>
                </div>
            @empty
                <p>pas de reponse</p>
            @endforelse
            <div class="container-btn">
                <a href="{{url('qcm')}}" class="btn-validate">Ok</a>
            </div>
    </div>


@endsection
