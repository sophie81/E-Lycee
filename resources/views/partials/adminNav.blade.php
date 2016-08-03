<div class="container-fluid">
    <div class="row">
		<ul class="top-nav col-xs-12">
			<li class="col-xs-4"><p>Bonjour <span class="username">{{Auth::user()->username}}</span></p></li>
			<li class="col-xs-4 site-title"><h1>E-Lycée</h1></li>
		    <li class="col-xs-4 right-nav">
		    	<a href="{{url('/')}}">Retour au site</a>	
		    	<a href="{{url('logout')}}" class="btn-deco">Se déconnecter</a>
		    </li>
		</ul>
	</div>
</div>