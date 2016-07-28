@extends('layouts.admin')

@section('content')
    @if(Session::has('message'))
        <p class="msg mb20">{{Session::get('message')}}</p>
    @endif
    <nav>
        <li><a href="{{url('teacher')}}">Dashboard</a></li>
        <li><a href="{{url('post')}}">Mes articles</a></li>
    </nav>
    <nav>
        <li><a href="{{url('post','create')}}">Créer un article</a></li>
    </nav>
    <table class="table">
        <thead>
        <tr>
            <th>Titre</th>
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
                <td>
                    <a href="{{url('post',[$post->id, 'edit'])}}" class="btn btn-update mb10">{{$post->title}}</a>
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
                    <a href="{{url("changeStatus", $post->id)}}" class="btn btn-valid">{{$post->status}}</a>
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
    {!! $posts->links() !!}
@endsection