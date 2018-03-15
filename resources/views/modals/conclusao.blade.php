<form class='Modal Modal-conclusao'>
	<img src="img/dire.svg" class='direito'>
	<img src="img/esq.svg" class='esquerdo'>
	<div class='HeaderConclusao'>
		<h1 class='Heading4'>Parabéns!</h1>
		<i class="material-icons closeModal closeModal1">close</i>
	</div>
	<div class='ContainerConclusao'>
		<p class='Dislay1 ContainerConclusaop'>Você receberá no seu e-mail a informações referente à sua compra no Ingresso Cultural.</p>
		<h2 class='Display3'>Queremos te conhecer melhor para oferecermos mais eventos do seu gosto</h2>
		<h3 class='Display4'>Quais tipos de eventos mais te interessam?</h3>

		<span>

			<label for='ArteELazer'>Arte e lazer</label>
			<input type="checkbox" name="ArteELazer" id='ArteELazer' class='checagemGosto'>

			<label for='Esportivo'>Esportivo</label>
			<input type="checkbox" name="Esportivo" id='Esportivo' class='checagemGosto'>

			<label for='Gastronomico'>Gastronômico</label>
			<input type="checkbox" name="Gastronomico" id='Gastronomico' class='checagemGosto'>

			<label for='Educação'>Educação</label>
			<input type="checkbox" name="Educação" id='Educação' class='checagemGosto'>

		</span>

		<p class='Display4 textoRange'>Qual a faixa de preço de ingresso que você pode pagar?</p>

		<span class='spanRange'>
			<div class='contensor'>
				<div id="slider">
					<div class='inicial'></div>

				</div>
			</div>
			<div id="min"></div>
			<div id="max"></div>
			<div id='total'>$250</div>
		</span>

		<button class="btn-five Paragraph1 btnRange">Enviar</button>

	</div>
</form>