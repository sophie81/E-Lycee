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
    <form action="{{url('post', 'action')}}" method="POST" id="post_action">
        {{csrf_field()}}
        <select name="action" id="action">
            <option value="publish">Publier</option>
            <option value="unpublish">Dépublier</option>
            <option value="delete">Supprimer</option>
        </select>
        <input type="submit" value="Valider" class="btn-validate">
        <table class="table table-post">
            <thead>
            <tr>
                <th>Actions</th>
                <th>Status</th>
                <th class="th-title">Titre</th>
                <th>Auteur</th>
                <th>Commentaire</th>
            </tr>
            </thead>
            <div id="confirm">
                <p>Confirmez vous la suppression de "<span></span>" ?</p>
            </div>
            @forelse($posts as $post)
                <tr>
                    <td>
                        <input class="form-check-input" type="checkbox" name="ck[{{$post->id}}]" id="cbox1" value="{{$post->id}}">
                    </td>
                    <td>
                        <a href="{{url("changeStatus", $post->id)}}">
                            <button class="btn btn-valid dft_curs {{$post->status=='unpublished'? 'red' : 'green'}}">
                            </button>
                        </a>
                    </td>
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
                </tr>
            @empty
                <p>aucun post</p>
            @endforelse
        </table>
    </form>
    <div class="row content-pagination">
        <div class="col-xs-12">
            {!! $posts->links() !!}
        </div>
    </div>
@endsection