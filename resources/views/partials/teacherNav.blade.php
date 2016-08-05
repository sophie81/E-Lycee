<ul class="bottom-nav-admin">
    <li><a href="{{url('teacher')}}" class="{{ Request::is('teacher') ? 'active' : '' }}">Dashboard</a></li>
    <li><a href="{{url('post')}}" class="{{ Request::is('post') ? 'active' : '' }}">Mes articles</a></li>
    <li><a href="{{url('question')}}" class="{{ Request::is('question') ? 'active' : '' }}">Mes questions</a></li>
    <li><a href="{{url('comment')}}" class="{{ Request::is('comment') ? 'active' : '' }}">Mes commentaires</a></li>
</ul>