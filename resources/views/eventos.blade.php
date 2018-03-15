
@extends('layouts.app')

@section('title', 'Eventos')

@section('content')
<section id='Eventos-page'>
	<span class='blend-index'></span>
	<img src="img/banner1.png">
	<div class='container'>
		<div class='index-content'>
			<form class='filtro-index filtro-eventos'>
				<input type="text" name="eventos" placeholder="Pesquisar por eventos" class="Paragraph2">
				<input type="text" name="cidades" placeholder="Pesquisar por cidades" class="Paragraph2">
				<select class="Paragraph2">
					<option class="Paragraph2">Todas as datas</option>
				</select>
				<button class="Paragraph1" type="submit">Procurar</button>
			</form>
		</div>
	</div>
</section>

<section id='Eventos2'>
	<div class='container'>
		<h2 class='Heading3'>63 eventos encontrados em Recife</h2>
		<div class='Eventos-todos'>
			@include('includes.todos-eventosView')
			<a href="/eventos" class='Paragraph1 moreload'>Carregar mais</a>
		</div>
	</div>
</section>

@stop
<style>
	header {
		margin-top: -6em !important;
	}
</style>