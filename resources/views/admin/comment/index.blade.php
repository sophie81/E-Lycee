@extends('layouts.admin')

@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <h2 class="title-h2">Commentaires</h2>
    <nav>
        @include('partials.teacherNav')
    </nav>
    <table class="table table-comment">
        <thead>
        <tr>
            <th>Pseudonyme</th>
            <th>Commentaire</th>
            <th>Article</th>
            <th>Status</th>
        </tr>
        </thead>
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
                        <button class="btn status-comment {{$comment->status=='unpublished'? 'red' : 'green'}}">
                        </button>
                    </a>
                </td>

            </tr>
        @empty
            <p>aucun commentaire</p>
        @endforelse
    </table>
    <div class="row content-pagination">
        <div class="col-xs-12">
            {!! $comments->links() !!}
        </div>
    </div>
@endsection