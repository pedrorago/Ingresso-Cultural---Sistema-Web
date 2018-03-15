@extends('layouts.app')

@section('title', 'Mapa Cultural')

@section('content')


<section id='MapaContainer'>	
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15801.484479677945!2d-34.8779323!3d-8.0635751!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a31f466c012e14d!2sMangue+Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1519671313583" width="600" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>

	<div class='mapaBlur' id='blur'>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 143.98 138.61"><defs><style>.cls-1{fill:#fff;opacity:0.52;}</style></defs><title>blur</title><g id="Camada_2" data-name="Camada 2"><rect class="cls-1" width="143.98" height="138.61"/></g></svg>
	</div>

	<div class='filtroMapa'>
		<form>
			<p class='Paragraph5'>Saiba onde ficam todos os pontos de cultura, museus, teatros, cinemas, agremiações culturais.</p>
			<span>
				<label for='termo'>Pesquisar por termo</label>
				<input type="text" name="termo" id='termo'>
			</span>
			<span>
				<label for='Categorias'>Categorias</label>
				<select name='Categorias' id='Categorias'>
					<option>Todas</option>
				</select>
			</span>
			<button class='btn-three'>OK</button>
		</form>
	</div>

	<div class='MaisProcurados'>
		<h2 class='Display3'>Mais procurados</h2>
		<div class='MaisProcuradosContainer'>
			<span class='MaisProcuradosResultado'>
				<h3 class='Paragraph5'>Ponto de Cultura Nome do Lugar</h3>
				<i class='ion-ios-location'></i><p class='Display4'>R. nonono, 00, Bairro- Recife/PE</p>
			</span>
			<span class='MaisProcuradosResultado'>
				<h3 class='Paragraph5'>Ponto de Cultura Nome do Lugar</h3>
				<i class='ion-ios-location'></i><p class='Display4'>R. nonono, 00, Bairro- Recife/PE</p>
			</span>
			<span class='MaisProcuradosResultado'>
				<h3 class='Paragraph5'>Ponto de Cultura Nome do Lugar</h3>
				<i class='ion-ios-location'></i><p class='Display4'>R. nonono, 00, Bairro- Recife/PE</p>
			</span>
			<span class='MaisProcuradosResultado'>
				<h3 class='Paragraph5'>Ponto de Cultura Nome do Lugar</h3>
				<i class='ion-ios-location'></i><p class='Display4'>R. nonono, 00, Bairro- Recife/PE</p>
			</span>
			<span class='MaisProcuradosResultado'>
				<h3 class='Paragraph5'>Ponto de Cultura Nome do Lugar</h3>
				<i class='ion-ios-location'></i><p class='Display4'>R. nonono, 00, Bairro- Recife/PE</p>
			</span>
			<span class='MaisProcuradosResultado'>
				<h3 class='Paragraph5'>Ponto de Cultura Nome do Lugar</h3>
				<i class='ion-ios-location'></i><p class='Display4'>R. nonono, 00, Bairro- Recife/PE</p>
			</span>
			<span class='MaisProcuradosResultado'>
				<h3 class='Paragraph5'>Ponto de Cultura Nome do Lugar</h3>
				<i class='ion-ios-location'></i><p class='Display4'>R. nonono, 00, Bairro- Recife/PE</p>
			</span>
			<span class='MaisProcuradosResultado'>
				<h3 class='Paragraph5'>Ponto de Cultura Nome do Lugar</h3>
				<i class='ion-ios-location'></i><p class='Display4'>R. nonono, 00, Bairro- Recife/PE</p>
			</span>

		</div>
	</div>
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
