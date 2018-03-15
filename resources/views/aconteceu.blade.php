@extends('layouts.app')

@section('title', 'Aconteceu')

@section('content')


<section id='AconteceuFotos'>

	<ul class='SubMenuAconteceu'>
		<li>Galeria de fotos</li>
		<li>Vídeos</li>
	</ul>

	<main>
		<div class='container'>
			<h1 class='Heading3'>Fotos</h1>
			<p class='Display4 AconteceuDesc'>With the exception of Nietzsche, no other madman has contributed so much to human sanity as has Louis Althusser. He is mentioned twice in the Encyclopaedia Britannica as someone’s teacher. There could be no greater lapse: for two important decades (the 60s and the 70s), Althusser was at the eye of all the important cultural storms. He fathered quite a few of them.</p>
			
			<div class='AconteceuSlideContainer'>
				<div class='AconteceuFoto'>
					<div class='AconteceuFotoContainer'>
						<img src="img/banner13.jpg">
						<span class='AconteceuTarja'>
							<h3 class='tituloTarja'>Nome do álbum</h3>
							<i class='ion-android-calendar'></i><p>agosto, 2017</p>
						</span>
					</div>
				</div>
				<div class='AconteceuFoto'>
					<div class='AconteceuFotoContainer'>
						<img src="img/banner13.jpg">
						<span class='AconteceuTarja'>
							<h3 class='tituloTarja'>Nome do álbum</h3>
							<i class='ion-android-calendar'></i><p>agosto, 2017</p>
						</span>
					</div>
				</div>
				<div class='AconteceuFoto'>
					<div class='AconteceuFotoContainer'>
						<img src="img/banner13.jpg">
						<span class='AconteceuTarja'>
							<h3 class='tituloTarja'>Nome do álbum</h3>
							<i class='ion-android-calendar'></i><p>agosto, 2017</p>
						</span>
					</div>
				</div>
				<div class='AconteceuFoto'>
					<div class='AconteceuFotoContainer'>
						<img src="img/banner13.jpg">
						<span class='AconteceuTarja'>
							<h3 class='tituloTarja'>Nome do álbum</h3>
							<i class='ion-android-calendar'></i><p>agosto, 2017</p>
						</span>
					</div>
				</div>
				<div class='AconteceuFoto'>
					<div class='AconteceuFotoContainer'>
						<img src="img/banner13.jpg">
						<span class='AconteceuTarja'>
							<h3 class='tituloTarja'>Nome do álbum</h3>
							<i class='ion-android-calendar'></i><p>agosto, 2017</p>
						</span>
					</div>
				</div>
				<div class='AconteceuFoto'>
					<div class='AconteceuFotoContainer'>
						<img src="img/banner13.jpg">
						<span class='AconteceuTarja'>
							<h3 class='tituloTarja'>Nome do álbum</h3>
							<i class='ion-android-calendar'></i><p>agosto, 2017</p>
						</span>
					</div>
				</div>

			</div>
		</div>
	</main>

</section>


@stop

<style>
	.HeaderSite
	{
		display: none !important;
	}
	.Header2
	{
		display: flex !important;
	}
	header {
		margin-top: -6.9em !important;
	}
</style>
