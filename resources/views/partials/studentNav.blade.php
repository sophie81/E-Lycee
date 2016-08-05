<ul class="bottom-nav-admin">
    <li><a href="{{url('student')}}" class="{{ Request::is('student') ? 'active' : '' }}">Dashboard</a></li>
    <li><a href="{{url('qcm')}}" class="{{ Request::is('qcm') ? 'active' : '' }}">QCM</a></li>
</ul>