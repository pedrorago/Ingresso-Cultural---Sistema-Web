
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section id='Index'>
	<span class='blend-index'></span>
	<img src="img/banner1.png">
	<div class='container'>
		<div class='index-content'>
			<h1 class="Heading1">A Right Media Mix Can Make The Difference</h1>
			<form class='filtro-index'>
				<input type="text" name="eventos" placeholder="Pesquisar por eventos" class="Paragraph2">
				<input type="text" name="cidades" placeholder="Pesquisar por cidades" class="Paragraph2">
				<select class="Paragraph2">
					<option class="Paragraph2">Todas as datas</option>
				</select>
				<button class="btn-five Paragraph1" type="submit">Procurar</button>
			</form>
		</div>
	</div>
</section>

<section id='Banners'>
	<div class='container'>
		<div class='slide-banners'>
			<div class='slide-container'>
				<div class='slide-box'>
					<span class='gradiente-banner'></span>
					<img src="img/banner6.gif">
					<h2 class='Heading2'>Conheça todas as vantagens do Ingresso Cultural para os seus eventos</h2>
					<a href="javascript:void(0)" class='Paragraph3'>Saiba mais</a>
				</div>
				<div class='slide-box'>
					<span class='gradiente-banner'></span>
					<img src="img/banner2.png">
					<h2 class='Heading2'>Conheça todas as vantagens do Ingresso Cultural para os seus eventos</h2>
					<a href="javascript:void(0)" class='Paragraph3'>Saiba mais</a>
				</div>
				<div class='slide-box'>
					<span class='gradiente-banner'></span>
					<img src="img/banner7.png">
					<h2 class='Heading2'>Conheça todas as vantagens do Ingresso Cultural para os seus eventos</h2>
					<a href="javascript:void(0)" class='Paragraph3'>Saiba mais</a>
				</div>
				<div class='slide-box'>
					<span class='gradiente-banner'></span>
					<img src="img/banner9.jpg">
					<h2 class='Heading2'>Conheça todas as vantagens do Ingresso Cultural para os seus eventos</h2>
					<a href="javascript:void(0)" class='Paragraph3'>Saiba mais</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id='Eventos'>
	<div class='container'>
		<ul class='navbar-eventos'>
			<li><span class='black'></span><p class='Dislay1'>Todos</p></li>
			<li><span class='red'></span><p class='Dislay1'>Arte e lazer</p></li>
			<li><span class='green'></span><p class='Dislay1'>Esportivo</p></li>
			<li><span class='yellow'></span><p class='Dislay1'>Gastronômico</p></li>
			<li><span class='blue'></span><p class='Dislay1'>Cursos e palestras</p></li>
		</ul>
		<h2 class='Heading3'>63 eventos encontrados em Recife</h2>
		<div class='Eventos-todos'>
			@include('includes.todos-eventos')
			<a href="/eventos" class='Paragraph1 moreload'>Carregar mais</a>
		</div>
	</div>
</section>
<section id='EmailHome'>
	<span class='blendEmail'></span>
	<img src="img/banner10.jpg">
	<div class='EmailContainer'>
		<h2 class='Heading1'>Quer saber de todas eventos em primeira mão? </h2>
		<span>
			<input type="text" name="email" placeholder="Seu email" class="Paragraph2">
			<button class="btn-five Paragraph1" type="submit">Cadastrar</button>
		</span>
	</div>
</section>
<section id='Destaque'>
	<div class='container'>
		<h2 class='Heading2'>Eventos em destaque</h2>
		<div class='eventos-destaque'>
			@include('includes.eventos-destaque')
		</div>
	</div>
</section>
@stop
<style>
	header {
		margin-top: -6em !important;
	}
</style>