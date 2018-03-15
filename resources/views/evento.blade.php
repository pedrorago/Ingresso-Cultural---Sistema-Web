@extends('layouts.app')

@section('title', 'Evento')

@section('content')

<section id='Evento'>
	<div class='container'>

		<div id='Evento-banner'>
			<img src="img/banner2.png">
		</div>
		<div class='evento-descricaoView'>
			<div class='evento-descricaoTamanho'>
				<h4 class='Display3'>MINICURSO: METODOLOGIA DE GESTÃO DE PROJETOS - SCRUM...</h4>
				<span class='span-descricao'>
					<i class="material-icons">date_range</i>
					<p class='Display5'>09 ABRIL</p>
				</span>
				<span class='span-descricao'>
					<i class="material-icons">place</i>
					<p class='Display5'>CENTRO DE CIÊNCIAS SOCIAIS APLICADAS</p>
				</span>
				<span class='span-descricao'>
					<i class="material-icons">watch_later</i>
					<p class='Display5'>14h30</p>
				</span>
				<a href='javascript:void(0)' class='span-descricao'>
					<i class="material-icons share">share</i>
					<p class='Display5'>Compartilhar</p>
				</a>
			</div>

			<div class='boxIngressos'>
				<span class='boxIngressos-header'>
					<h3 class='Paragraph4'>Ingressos</h3>
				</span>
				<span class='boxIngressos-container'>
					<div class='boxIngressos-info'>
						<h1 class='Paragraph4'>Ingresso 1</h1>
						<h2 class='Paragraph3'>R$ 999,99</h2>
						<p class='Display5'>Até 25/10/18</p>
						<span class='adicionarRemover'>
							<p class='Display3 btnMenos'>-</p>
							<p class='Display3 quantidade'>1</p>
							<p class='Display3 btnMais'>+</p>
						</span>
					</div>
					<div class='boxIngressos-info'>
						<h1 class='Paragraph4'>Ingresso 1</h1>
						<h2 class='Paragraph3'>R$ 999,99</h2>
						<p class='Display5'>Até 25/10/18</p>
						<span class='adicionarRemover'>
							<p class='Display3 btnMenos'>-</p>
							<p class='Display3 quantidade'>1</p>
							<p class='Display3 btnMais'>+</p>
						</span>
					</div>
					<div class='boxIngressos-info'>
						<h1 class='Paragraph4'>Ingresso 1</h1>
						<h2 class='Paragraph3'>R$ 999,99</h2>
						<p class='Display5'>Até 25/10/18</p>
						<span class='adicionarRemover'>
							<p class='Display3 btnMenos'>-</p>
							<p class='Display3 quantidade'>1</p>
							<p class='Display3 btnMais'>+</p>
						</span>
					</div>
					<div class='boxIngressos-info'>
						<h1 class='Paragraph4'>Ingresso 1</h1>
						<h2 class='Paragraph3'>R$ 999,99</h2>
						<p class='Display5'>Até 25/10/18</p>
						<span class='adicionarRemover'>
							<p class='Display3 btnMenos'>-</p>
							<p class='Display3 quantidade'>1</p>
							<p class='Display3 btnMais'>+</p>
						</span>
					</div>
				</span>
				<a href="javascript:void(0)" class='btn-four'>Finalizar compra</a>
			</div>
		</div>

		<div class='descricao-eventoContainer'>
			<h2 class='Display3'>Descrição do evento</h2>

			<p class='Paragraph1'>
				From this moment on, choose not to let your past dictate your future. What is gone is gone – forever. Now is the time to move on, to do and become what you want: to be the best in any area that you choose, so you may design your own destiny.<br><br>

				Here are a few helpful suggestions that you may take on board, and below you will find a couple of simple tips that can quickly move you in the direction of manifesting your destiny to accomplish many great things in your life.<br><br>

				To join ranks with the most successful people in the field of your choice, or merely to achieve your dreams quietly, for yourself, you will need to take the journey toward a better more enlightened future; toward a more empowered and motivated you, toward a life that you will design and achieve. You will live your life as you want it. And you will become that person you have been dreaming of becoming.<br><br>
			</p>
			<!-- Maximo de caracters para o P é: 1096  -->
		</div>

		<div class='sobreProduto'>
			<h2 class='Display3'>Sobre o produto</h2>

			<p class='Paragraph1'>
				CAIS<br><br>
				Coletivo Arquitetônico de Interesse Social
				DA de Arquitetura e Urbanismo da UNICAP
			</p>
			<a href="javascript:void(0)" class='btn-three'>Fale com o produtor</a>

		</div>

		<div class='localContainer'>
			<h2 class='Display3'>Local</h2>
			<p class='Paragraph1'>Clube Metrópole</p>
			<p class='Paragraph1'>Rua Das Ninfas, 125, Boa Vista</p>
			<p class='Paragraph1'>Recife, PE</p>
		</div>

		<div class='mapaContainer'>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15801.484479677945!2d-34.8779323!3d-8.0635751!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a31f466c012e14d!2sMangue+Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1516815771946" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

	</div>

</section>

@stop
