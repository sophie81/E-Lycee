<div class="container-fluid">
    <div class="row">
        <ul class="top-nav">
            <li class="col-xs-6 left-part">
                <h1>E-lycée</h1>
                <img src="{{url('images/fb-like.jpg')}}" alt="Facebook" class="fb-like">
            </li>
            <li class="col-xs-6 right-nav">
                @if(Auth::check())
                    @if (Auth::user()->role == 'teacher')
                        <a href="{{url('teacher')}}">Dashboard</a>
                    @else
                        <a href="{{url('student')}}">Dashboard</a>
                    @endif
                @else
                    <a href="{{url('login')}}" class="connect">Connexion</a>
                @endif
                <a href="https://facebook.com/" target="_blank" class="fb logos"></a>
                <a href="https://twitter.com/" target="_blank" class="twitter logos"></a>
            </li>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <ul class="bottom-nav">
            <li class="col-md-6">
                <a href="{{url('/')}}">Home</a>
                <a href="{{url('actualites')}}">Actus</a>
                <a href="{{url('lycee')}}">Lycée</a>
            </li>
            <li class="col-md-6">
                <img src="{{url('images/loupe.png')}}" alt="Loupe" class="loupe">
                <form method="get" role="search">
                    <input type="text" id="search-bar" name="search-bar" class="search-bar">
                    <input type="submit" value="Ok">
                </form>
            </li>
        </ul>
    </div>
</div>