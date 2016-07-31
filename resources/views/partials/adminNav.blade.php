<ul class="top-nav">
	<li class="col-md-6"><a href="{{url('/')}}">Retour au site</a></li>
    <li class="col-md-6 right-nav">
    		<p>Bonjour <span class="username">{{Auth::user()->username}}</span></p>
    	<a href="{{url('logout')}}" class="btn-deco">Se déconnecter</a>
    </li>
</ul>