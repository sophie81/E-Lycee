<div class="container-fluid">
    <div class="row">
        <ul class="top-nav">
            <li class="col-md-6">
                <h1>E-lycée</h1>
                <img src="{{url('images/fb-like.jpg')}}" alt="Facebook" class="fb-like">
            </li>
            <li class="col-md-6">
                <a href="{{url('login')}}">Connexion</a>
                <img src="{{url('images/logo-fb.png')}}" alt="Facebook">
                <img src="{{url('images/logo-twitter.png')}}" alt="Twitter">
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
                <form action="/search" method="get">
                    <input type="text" id="search-bar" name="search-bar" class="search-bar">
                    <input type="submit" value="Ok">
                </form>
            </li>
        </ul>
    </div>
</div>