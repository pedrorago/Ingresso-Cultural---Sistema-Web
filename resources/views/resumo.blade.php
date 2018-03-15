@extends('layouts.app')

@section('title', 'Evento')

@section('content')

<section id='Resumo'>
	<div class='container'>

		<div class='resumo-desc '>
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

			<div class='resumoDesc-img'>
				<img src="img/banner2.png">
			</div>
		</div>

		<div class='resumoDoPedido'>
			<h2 class='Display3'>Resumo do pedido</h2>
			<span>
				<p class='Display3 pIngresso'>TIPO DE INGRESSO</p>
				<p class='Display3 pPreco'>PREÇO</p>
				<p class='Display3 pTaxa'>TAXA</p>
				<p class='Display3 pQuantidade'>QUANTIDADE</p>
				<p class='Display3 pSubtotal'>SUBTOTAL</p>
			</span>

			<span>
				<p class='Paragraph5 pIngresso'>MINICURSO: METODOLOGIA DE GESTÃO DE PROJETOS - SCRUM...</p>
				<p class='Paragraph5 pPreco'>R$ 100,00</p>
				<p class='Paragraph5 pTaxa'>R$ 100,00</p>
				<p class='Paragraph5 pQuantidade'>1</p>
				<p class='Paragraph5 pSubtotal'>R$ 200,00</p>
			</span>

			<span class='spanTotal'>
				<p class='Display3 pTotal'>TOTAL</p>
				<p class='Display3'>R$ 200,00</p>
			</span>

		</div>

		<div class='compradorPagamento'>

			<div class='contadorBox'>
				<h2 class='Heading1 contador'>14:00</h2>
				<p class='Paragraph4'>Conclua sua inscrição em 14:00 minutos. Após 14:00 minutos, seu pedido será cancelado.</p>
			</div>


			<div class='contadorContainer'>
				<h2 class='Display3'>Comprador do ingresso</h2>

				<form class='formResumo formComprador'>
					<label for='nome2'>Nome</label>
					<input type="text" id='nome2' name="nome" placeholder="Digite seu nome" class='input'>
					<label for='Sobrenome'>Sobrenome</label>
					<input type="text" id='Sobrenome' name="Sobrenome" placeholder="Digite seu sobrenome" class='input'>
					<label for='Email'>Email</label>
					<input type="Email" id='Email' name="Email" placeholder="Digite seu email" class='input'>
					<label for='Confimar'>Confimar email</label>
					<input type="Email" id='Confimar' name="Confimar" placeholder="Digite seu email" class='input'>
				</form>

				<h2 class='Display3'>Pagamento</h2>

				<ul class='Pagamento-opcao'>
					<li class='Display2 Pagamento-opcaoOn'>Cartão de crédito</li>
					<li class='Display2'>Boleto bancário</li>
					<li class='Display2'>Débito online</li>
				</ul>


				<form class='formResumo formCartao'>
					<label for='Cartão'>Cartão</label>
					<select class='select' name='Cartão' id='Cartão'>
						<option>Selecione o cartão</option>
					</select>
					<label for='Numero'>Número do cartão</label>
					<input type="number" id='Numero' name="Numero" placeholder="Digite o número do cartão" class='input'>
					<label for='CartaoInfo1'>Cartão</label>
					<select class='select' id='CartaoInfo1' name='CartaoInfo'>
						<option>Mês</option>
						<?php
						$mes = 1;
						while ($mes <= 12)
						{
							?> <option><?=$mes?></option> <?php
							$mes ++;
						} 
						?>
					</select>
					<select class='select' id='CartaoInfo2' name='CartaoInfo2'>
						<option>Ano</option>
						<?php
						$ano = 2015;
						while ($ano <= 2030)
						{
							?> <option><?=$ano?></option> <?php
							$ano ++;
						} 
						?>
					</select>	
					<label for='css'>CSS</label>	
					<input type="number" id='css' name="css" placeholder="Digite o CSS" class='input'>
					<label for='Parcelas'>Parcelas</label>
					<select class='select' id='Parcelas' name='Parcelas'>
						<option>1x sem juros de R$ 200,00</option>
					</select>
				</form>

				<h2 class='Display2'>Dados do titular do cartão</h2>

				<form class='formResumo formTitular'>
					<label for='nome1'>Nome (impresso no cartão)</label>
					<input type="text" id='nome1' name="nome" placeholder="Digite seu nome" class='input'>
					<label for='data'>Data de nascimento</label>
					<input type="number" id='data' name="data" placeholder="Digite sua data" class='input'>
					<label for='CPF'>CPF</label>
					<input type="number" id='CPF' name="CPF" placeholder="Digite seu CPF" class='input'>
					<label for='CEP1'>CEP</label>
					<input type="number" id='CEP1' name="CEP" placeholder="Digite seu CEP" class='input'>
				</form>

				<h2 class='Display3'>Informações de cobrança</h2>

				<form class='formResumo formCobranca'>
					<label for='Pais'>Pais</label>
					<select class='select' id='Pais' name='Pais'>
						<option>Brasil</option>
					</select>
					<label for='CEP2'>CEP</label>
					<input type="number" id='CEP2' name="CEP" placeholder="Digite seu CEP" class='input'>
					<label for='Endereco'>Endereço</label>
					<input type="text" id='Endereco' name="Endereco" placeholder="Digite seu endereço" class='input'>
					<label for='Bairro'>Bairro</label>
					<input type="text" id='Bairro' name="Bairro" placeholder="Digite seu bairro" class='input'>
					<label for='Complemento'>Complemento</label>
					<input type="text" id='Complemento' name="Complemento" placeholder="Digite seu complemento" class='input'>
					<label for='Cidade'>Cidade</label>
					<input type="text" id='Cidade' name="Cidade" placeholder="Digite sua cidade" class='input'>
					<label for='Estado'>Estado</label>
					<select class='select' id='Estado' name='Estado'>
						<option>Selecione seu estado</option>
					</select>
					<a href='javascript:void(0)' class='btn-six btnPagamento'>Pagar agora</a> <!-- Coloquei como uma ancora ao inves de button pra voce voer como chama o modal, separei uma funçao so pra chamar ele. Troca para button e quando validar o formulario voce chama a funçao -->
					</form>

			</div>
		</div>

	</div>

</section>

@stop



