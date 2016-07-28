@extends('layouts.admin')

@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <nav>
        @include('partials.teacherNav')
    </nav>
    <nav>
        <li><a href="{{url('question','create')}}">Créer une question</a></li>
    </nav>
    <table class="table">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Status</th>
            <th>Action (suppression)</th>
        </tr>
        </thead>
        <div id="confirm">
            <p>Confirmez vous la suppression de la resource <span></span> ?</p>
        </div>
        @forelse($questions as $question)
            <tr>
                <td>
                    <a href="{{url('question',[$question->id, 'edit'])}}" class="btn btn-update mb10">{{$question->title}}</a>
                </td>
                <td>
                    <a href="{{url("changeStatusQuestion", $question->id)}}" class="btn btn-valid">{{$question->status}}</a>
                </td>
                <td>
                    <form class="destroy" method="POST" action="{{url('question', $question->id)}}">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="hidden" name="title_h" value="{{$question->title}}">
                        <input class="btn btn-closed" name="delete" type="submit" value="Supprimer">
                    </form>
                </td>

            </tr>
        @empty
            <p>aucune question</p>
        @endforelse
    </table>
    {!! $questions->links() !!}
@endsection