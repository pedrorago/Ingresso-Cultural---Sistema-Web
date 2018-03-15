<html lang="{{ config('app.locale') }}">
<head>

	<?php
	if ($segmento = Request::segment(1) == "evento"):
		?>

	<title><?= $evento['nome']; ?></title>

	<?php
	else:
		?>

	<title>Ingresso Cultural - @yield('title')</title>

	<?php
	endif;
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta author="Mangue Tecnologia">


	<base href="<?= $url_base; ?>">

	<meta property="og:type" content="website">

	<?php
	if ($segmento = Request::segment(1) == "produto"):
		?>

	<meta property="og:image" content="<?= $url_base.$produto['imagem']; ?>">

	<?php
	else:
		?>
	
	<meta property="og:image" content="<?= $url_base; ?>img/icons/logo-black.svg">

	<?php
	endif;
	?>
	<meta name="keywords" value="<?= $data['info']['keywords']; ?>">
	<meta name="description" value="<?= $data['info']['descricao']; ?>">

	<link rel='icon' href='img/icon2.png'>

	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="/fonts/awesome/fontawesome-all.css"/>
	<link rel="stylesheet" type="text/css" href="/css/plugins/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/css/plugins/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="/css/plugins/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="/css/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="/css/jquery-ui.structure.css" />
	<link rel="stylesheet" type="text/css" href="/css/jquery-ui.theme.css" />
	<link rel="stylesheet" type="text/css" href="/css/ionicons.css">


	<link rel="stylesheet" href="/css/reset.css">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/responsive.css">

</head>

<body>

	@include('modals.login')

	@include('modals.conclusao')

	@include('modals.recuperar')

	@include('modals.cadastro')

	@include('modals.paginaEvento')

	@include('modals.verMais')    
	
	<div class="content">

		@include('templates.header_site')

		@include('templates.header_2')

		@yield('content')

		@include('templates.footer')

	</div>

	<script src="/js/jquery-3.3.1.js" ></script>
	<script src="/js/jquery-ui.js" ></script>
	<script src="/js/plugins/jquery.validate.js" ></script>
	<script src="/js/plugins/slick.min.js" ></script>
	<script src="/js/plugins/jquery.mask.js" ></script>
	<script src="/js/plugins/jquery.fancybox.min.js"></script>
	<script src="/js/slide.js" async></script>
	<script src="/js/app.js"></script>
	
	
</body>
</html>