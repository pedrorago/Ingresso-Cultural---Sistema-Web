@extends('layouts.app')

@section('title', 'Agenda')

@section('content')

<section class='bannerAgenda'> 
	<div class='bannerAgendaIMG'>
		<img src="img/banner10.jpg">
	</div>

	<div class='container'>
		<h1 class='Heading2'>Conheça todas as vantagens do Ingresso Cultural para os seus eventos</h1>
		<a href="javascript:void(0)" class='btn-eight'>Saiba mais</a>
	</div>

	<span class='bannerAgendaBlend'></span>
</section>
<section id='Calendario'>
	<div class='calendarioContainer'>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		<div class='calendarioBox'>
			<img src="img/dire2.svg" class='direito2'>
			<p class='calendarioLetra'>SEG</p>
			<p class='calendarioNumero'>19</p>
			<p class='calendarioLetra'>JAN</p>
		</div>
		
	</div>
</section>
<div class='agendaFiltroContainer'>
	<span class='filtroBox'>
		<p class='Display4'>FILTROS</p>
		<i class="material-icons">filter_list</i>
	</span>
	<div class='container'>
		<form class='formFiltro'>
			<span class='spanCategoria'>
				<label for='categorias'>Categorias</label>
				<select value='categoria' name='categorias' id='categorias'>
					<option>Todas</option>
				</select>
			</span>
			<span class='spanCategoria'>
				<label for='preco'>Preço</label>
				<select value='preco' name='preco' id='preco'>
					<option>Todos</option>
				</select>
			</span>
			<span class='spanCategoria'>
				<label for='Lugar'>Lugar</label>
				<input type="text" name="Lugar" id='Lugar' placeholder="Cidade ou Estado">
			</span>
			<button class='btn-three'>Ok</button>
		</form>
	</div>

</div>
<section id='EventosAgenda'>
	<div class='container'>
		<main>
			<h2 class='Heading2'>Segunda-feira, 19 de jan de 2017</h2>
			<div class='Eventos-todos'>
				@include('includes.eventosFiltros')
			</div>
		</main>
	</div>
</section>
<section id='EmailHome'>
	<span class='blendEmail'></span>
	<img src="img/banner17.jpg">
	<div class='EmailContainer'>
		<h2 class='Heading1'>Quer saber de todas eventos em primeira mão? </h2>
		<span>
			<input type="text" name="email" placeholder="Seu email" class="Paragraph2">
			<button class="btn-five Paragraph1" type="submit">Cadastrar</button>
		</span>
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