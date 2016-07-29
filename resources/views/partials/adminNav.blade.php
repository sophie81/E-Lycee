<ul class="top-nav">
	<li class="col-xs-6"><a href="{{url('/')}}">Retour au site</a></li>
    <li class="col-xs-6 right-nav">
    		<p>Bonjour {{Auth::user()->username}}</p>
    	<a href="{{url('logout')}}">Se déconnecter</a>
    </li>
</ul>