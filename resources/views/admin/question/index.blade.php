@extends('layouts.admin')

@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <nav>
        @include('partials.teacherNav')
    </nav>
    <nav>
        <ul class="bottom-nav-admin second-nav-admin">
            <li><a href="{{url('question','create')}}">Créer une question</a></li>
        </ul>
    </nav>
    <form action="{{url('question', 'action')}}" method="POST" class="form-inline post_action">
        {{csrf_field()}}
        <select name="action" id="action" class="form-control">
            <option value="publish">Publier</option>
            <option value="unpublish">Dépublier</option>
            <option value="delete">Supprimer</option>
        </select>
        <input disabled type="submit" value="Valider" class="btn-validate" name="confirm">
        <table class="table table-question">
            <thead>
            <tr>
                <th>Actions</th>
                <th>Status</th>
                <th>Titre</th>
                <th>Réponses</th>
            </tr>
            </thead>
            <div id="confirm">
                <p>Confirmez vous la suppression ?</p>
            </div>
            @forelse($questions as $question)
                <tr>
                    <td>
                        @if($question->score)
                        @else
                        <input class="form-check-input" type="checkbox" name="ck[{{$question->id}}]" id="cbox1" value="{{$question->id}}">
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-valid dft_curs {{$question->status=='unpublished'? 'red' : 'green'}}">
                        </button>
                    </td>
                    <td>
                        <a href="{{url('question',[$question->id, 'edit'])}}" class="btn btn-update mb10">{{$question->title}}</a>
                    </td>
                    <td>
                        <a href="{{url('question',[$question->id, 'choice'])}}" class="btn btn-update mb10">{{$question->choices->count()}}</a>
                    </td>

                </tr>
            @empty
                <p>aucune question</p>
            @endforelse
        </table>
    </form>
    {!! $questions->links() !!}
@endsection