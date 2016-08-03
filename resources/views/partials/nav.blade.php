<div class="container-fluid">
    <div class="row">
        <ul class="top-nav">
            <li class="col-xs-12">
                <div class="col-xs-4">
                    @if(Auth::check())
                        @if (Auth::user()->role == 'teacher')
                            <a href="{{url('teacher')}}">Dashboard</a>
                        @else
                            <a href="{{url('student')}}">Dashboard</a>
                        @endif
                    @else
                        <a href="{{url('login')}}" class="connect">Connexion</a>
                    @endif
                </div>
                <div class="col-xs-4 site-title">
                    <h1>E-lycée</h1>
                </div>
                <div class="col-xs-4 social">
                    <img src="{{url('images/fb-like.jpg')}}" alt="Facebook" class="fb-like">
                    <a href="https://facebook.com/" target="_blank" class="fb logos"></a>
                    <a href="https://twitter.com/" target="_blank" class="twitter logos"></a>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <ul class="bottom-nav">
            <li class="col-md-12 form-inline">
                <a href="{{url('/')}}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{url('actualites')}}" class="{{ Request::is('actualites') ? 'active' : '' }}">Actus</a>
                <a href="{{url('lycee')}}" class="{{ Request::is('lycee') ? 'active' : '' }}">Lycée</a>
                <form action="{{url('search')}}" method="GET" role="search">
                    <input type="text" name="search-bar" class="search-bar form-control" placeholder="Recherche">
                    <button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </li>
        </ul>
    </div>
</div>