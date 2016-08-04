@extends('layouts.master')

@section('title', $title)

@section('content')
	<div class="col-xs-12 lycee">
		<h2>Ecole Multimedia</h2>
		<img src="{{url('images/em.jpg')}}" alt="Ecole multimedia">
		<div class="descriptif">
		    <h3>L'apprenant, au centre de nos préoccupations </h3>

			<h4>Privilégier l'humain</h4>
			<p>Nos formations sont accessibles au plus grand nombre grâce à des frais de scolarité étudiés au plus près. L’école propose l’alternance dès que possible dans le parcours scolaire pour accéder aux diplômes tout en étant salarié. C’est une école à taille humaine qui se démarque par l’importance accordée aux valeurs pédagogiques et morales de sa mission.</p>

			<h4>Le contrat de la réussite</h4>
			<p>Faire ses études à L’École Multimédia, c’est adhérer à un contrat qui nous oblige à un seul objectif : la réussite de chacun.Tout au long de sa scolarité, l’élève est accompagné par une équipe disponible, dont la vocation est de ne laisser personne sur le bord de la route. Nos enseignants sont attachés à leur école et privilégie un rapport direct avec les élèves.</p>
			
			<h4>L’emploi au bout de la scolarité</h4>
			<p>Toutes nos filières de formation conduisent à un recrutement. Les études se concluent par une ou deux années en alternance dans le cadre du contrat de professionnalisation. Les étudiants ne sortent pas seulement avec un diplôme, ils partent avec un emploi et des compétences fondamentales qui les porteront tout au long de leur vie professionnelle.</p>

			<h4>L’indépendance, une garantie éthique</h4>
			<p>L’École Multimédia n’appartient à aucun groupe financier ni industriel. Elle est dirigée par ses fondateurs, des professionnels de la communication écrite et visuelle, qui considèrent leurs étudiants comme de futurs confrères. Elle en est solidaire. Elle les forme techniquement et intellectuellement comme les salariés libres de demain.</p>
    	</div>
    </div>
@endsection

