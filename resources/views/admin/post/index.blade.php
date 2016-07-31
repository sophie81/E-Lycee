@extends('layouts.admin')

@section('content')
    @if(Session::has('message'))
        <p class="msg">{{Session::get('message')}}</p>
    @endif
    <nav>
        @include('partials.teacherNav')
    </nav>
    <nav>
        <ul class="bottom-nav-admin">
            <li><a href="{{url('post','create')}}">Créer un article</a></li>
        </ul>
    </nav>
    <table class="table table-post">
        <thead>
        <tr>
            <th class="th-title">Titre</th>
            <th>Auteur</th>
            <th>Commentaire</th>
            <th>Status</th>
            <th>Action (suppression)</th>
        </tr>
        </thead>
        <div id="confirm">
            <p>Confirmez vous la suppression de la resource <span></span> ?</p>
        </div>
        @forelse($posts as $post)
            <tr>
                <td class="title-table">
                    <a href="{{url('post',[$post->id, 'edit'])}}">{{$post->title}}</a>
                </td>
                <td>
                    @if($post->user)
                        {{$post->user->username}}
                    @else
                        pas d'auteur
                    @endif
                </td>
                <td>
                    @if($post->comments)
                        <p>{{$post->comments->count()}}</p>
                    @else
                        0
                    @endif
                </td>
                <td>
                    <a href="{{url("changeStatus", $post->id)}}">
                        <button class="btn btn-valid {{$post->status=='unpublished'? 'red' : 'green'}}">
                        </button>
                    </a>
                </td>
                <td>
                    <form class="destroy" method="POST" action="{{url('post', $post->id)}}">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="hidden" name="title_h" value="{{$post->title}}">
                        <input class="btn btn-closed" name="delete" type="submit" value="Supprimer">
                    </form>
                </td>

            </tr>
        @empty
            <p>aucun post</p>
        @endforelse
    </table>
    <div class="row content-pagination">
        <div class="col-xs-12">
            {!! $posts->links() !!}
        </div>
    </div>
@endsection