@extends('layouts.admin')

@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <nav>
        @include('partials.teacherNav')
    </nav>

    <table class="table table-comment">
        <thead>
        <tr>
            <th>Pseudonyme</th>
            <th>Contenu</th>
            <th>Article</th>
            <th>Status</th>
        </tr>
        </thead>
        <div id="confirm">
            <p>Confirmez vous la suppression de la resource "<span></span>" ?</p>
        </div>
        @forelse($comments as $comment)
            <tr>
                <td>
                    <p>{{$comment->title}}</p>
                </td>
                <td>
                    <p>{{$comment->content}}</p>
                </td>
                <td>
                    <p>{{$comment->post->title}}</p>
                </td>
                <td class="td-status">
                    <a href="{{url("changeStatusComment", $comment->id)}}">
                        <button class="btn btn-valid {{$comment->status=='unpublished'? 'red' : 'green'}}">
                        </button>
                    </a>
                </td>

            </tr>
        @empty
            <p>aucun commentaire</p>
        @endforelse
    </table>
    {!! $comments->links() !!}
@endsection