jQuery(function($)
{

	var MANGUE = window.LOAD || 
	{};

	var host = window.location.hostname;

	if (host == "vankoke") 
	{
		adm_path = "http://rcultural/"
	} else 
	{
		adm_path = "http://recife-cultural-adm.siritecnologia.com.br/"
	}

	MANGUE.preloader = function()
	{

	}

	MANGUE.slick = function()
	{

	}

	MANGUE.mascaras = function()
	{

		var FormataNumero = function (val) 
		{
			return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		},

		Options = 
		{
			onKeyPress: function(val, e, field, options) 
			{
				field.mask(FormataNumero.apply(
					{}, arguments), options);
			}
		};

		$('.input-telefone').mask(FormataNumero, Options);

	}

	MANGUE.contato = function()
	{

		$('.form-contato').validate(
		{

			rules: 
			{
				email: 
				{ required: true, email: true },
				nome: 
				{ required: true },
				assunto: 
				{ required: true},
				mensagem: 
				{ required: true }
			},
			messages: 
			{
				email: 
				{ required: 'Preencha o campo email', email: 'Insira um email válido' },
				nome: 
				{ required: 'Preencha o campo nome' },
				assunto: 
				{ required: 'Preencha o campo assunto'},
				mensagem: 
				{ required: 'Preencha o campo mensagem'}
			},

			submitHandler: function( form )
			{

				var dados = $('.form-contato');

				$.ajax(
				{
					type: "POST",
					url: adm_path+"json/contato",
					data: dados.serialize(),

					beforeSend: function( data ) 
					{

						$(".form-contato button").text('Enviando...');

						$(".form-contato button").prop('disable', true);

					},

					success: function( data ) 
					{

                        // sucesso 200 trabalhar retorno...

                        if (data == 200) 
                        {

                        	$('.input').val('');

                            /*$('#modal').modal('show');

                            $('.modal-title').text('Enviado com sucesso');*/

                        } else 
                        {
                            // trabalhar erro aqui
                        }


                    },
                    error : function()
                    {
                       // feedback de erro aqui generico
                   },
                   complete: function()
                   {
                   	$(".form-contato button").text('Enviar');
                   	$(".form-contato button").prop('disable', false);
                   },
               });

				return false;
			}

		});

	}

	MANGUE.login = function()
	{

		$(".formLogin").validate(
		{

			errorClass: "error",

			rules: 
			{
				email: 
				{required: true, email: true},
				senha: 
				{required: true}
			},
			messages: 
			{
				email: 
				{required: 'Campo requerido', email: 'Digite um email válido'},
				senha: 
				{required: 'Campo requerido'}
			},

			submitHandler: function(form) 
			{

				var dados = $('.formLogin');

				$.ajax(
				{
					type: "POST",
					url: '/login',
					data: dados.serialize(),

					beforeSend: function() 
					{

						$('.formLogin .login-btn').text('entrando...');

						$('input').prop('disabled', true);

					},

					success: function(data) 
					{

                        // retirar se n for usar...

                        $('.modal-body').html('');

                        $('.response').text('');

                        if (data.status == 501) 
                        {

                        	$('.formLogin').find('#email').css('border', '1px solid red');
                        	$('.formLogin').find('#senha').css('border', '1px solid red');

                        	$('.formLogin').find('#email').on('click', function() 
                        	{
                        		$('.formLogin').find('#email').css('border', '1px solid rgba(110,110,110,0.4)');
                        		$('.formLogin').find('#email').val('');
                        	});

                        	$('.formLogin').find('#senha').on('click', function() 
                        	{
                        		$('.formLogin').find('#senha').css('border', '1px solid rgba(110,110,110,0.4)');
                        		$('.formLogin').find('#senha').val('');
                        	});

                        	$('.response').text('Email ou senha incorretos. Tente novamente.');

                        } else if (data.status == 502) 
                        {
                            // verificar se jogar em modal ou outra coisa
                            $('.response').text('Preencha os campos obrigatórios.');
                        } else if (data.status == 503) 
                        {

                        	$(".cadastroConfirmar").fadeIn();
                        	$('.response').html('O cadastro não foi confirmado, <a href="javascript:void(0)" onclick="reenviar_email()" class="reenviar_email" data-email="'+$('.email').val()+'">Reenviar email</a>');
                        } else if (data.status == 200 ) 
                        {

                        	$('.H2-Custom').text('Olá, '+data.usuario);

                        	$('.fechar').hide();

                        	$('input').val('');

                        	$(".carrinho-box").toggle(100);
                        	$(".formLogin").removeClass("formLoginOn");
                        	$(".formRecuperar").removeClass("formRecuperarOn");
                        	$(".formCadastro").removeClass("formCadastroOn");
                        	$(".formLogin").find("#email").val('');
                        	$(".formLogin").find("#senha").val('');
                        	$(".formLogado").addClass("formLogadoOn");


                        } else 
                        {
                        	$('.response').text('Ocorreu um erro interno, tente novamente...');
                        }

                        $('input').prop("disabled", false);

                    },

                    error:function (data)
                    {

                    	$('.response').text('Ocorreu um erro interno, tente novamente...');
                    	$('.formLogin .login-btn').text('entrar');

                    	$('input').prop("disabled", false);

                    },

                    complete: function (data)
                    {
                    	$('.formLogin .login-btn').text('entrar');
                    }

                });
			}
		});

		$(".formLogin input").click( function()
		{
			$('.response').text("");
			$('.formLogin button').prop("disabled", false);
		});

	}

	MANGUE.cadastro = function()
	{

		jQuery.validator.addMethod("alphanumeric", function(value, element) 
		{
			return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
		}); 

		jQuery.validator.addMethod("upper", function(value, element) 
		{
			return this.optional(element) || /[A-Z]+/.test(value);
		});

		$(".formCadastro").validate(
		{

			errorClass: "error",

			rules: 
			{
				nome: 
				{ required: true, minlength: 2 },
				email: 
				{required: true, email: true},
				senha: 
				{required: true, maxlength: 16, minlength: 6, alphanumeric: true, upper: true}
			},
			messages: 
			{
				nome: 
				{ required: 'Campo requerido', minlength: 'Mínimo 2 caracteres'},
				email: 
				{required: 'Campo requerido', email: 'Digite um email válido'},
				senha: 
				{required: 'Campo requerido', maxlength: 'Máximo 16 caracteres', minlength: 'Mínimo 6 caracteres', alphanumeric: 'Só são permitidos letras e números', upper: 'É necessário uma letra maiúscula'}
			},

			submitHandler: function(form) 
			{

				var dados = $('.formCadastro');

				$.ajax(
				{
					type: "POST",
					url: '/cadastro',
					data: dados.serialize(),

					beforeSend: function() 
					{

						$('.formCadastro .cadastroButton').text('cadastrando...');

						$('button').prop('disabled', true);

					},

					success: function(data) 
					{

						if( data == 501 )
						{

							$('.errorEmail').fadeIn();

							$('.formCadastro').find("#email").on('click', function() 
							{
								$('.errorEmail').fadeOut();
								$(this).val('');
							});





						} else if( data == 502 )
						{

							$('.errorEmail').fadeIn();

							$('.formCadastro').find("#email").on('click', function() 
							{
								$('.errorEmail').fadeOut();
								$(this).val('');
							});
						} else if ( data == 200 ) 
						{

							$('input').val('');

							$('.emailSucess').fadeIn();

							$('.formCadastro').find("#email").on('click', function() 
							{
								$('.emailSucess').fadeOut();
								$(this).val('');
							});
							setTimeout(function()
							{
								$(".formRecuperar").removeClass("formRecuperarOn");
								$(".formCadastro").removeClass("formCadastroOn");
								$(".formLogin").find("#email").val('');
								$(".formLogin").find("#senha").val('');
								$(".formLogin").addClass("formLoginOn");
							}, 1200);



						} else 
						{

                                    // erro generico

                                    //$('.response').text('Ocorreu um erro interno, tente novamente... ');

                                }

                            },

                            error: function (xhr, ajaxOptions, thrownError)
                            {
                                // erro generico
                            },
                            complete: function (data)
                            {

                            	$('input').prop('disabled', false);

                            	$('.formCadastro .cadastroButton').text('cadastrar-me');

                            }  
                        });

				return false;

			}

		});

	}

	MANGUE.recuperar = function()
	{

		$(".formRecuperar").validate(
		{

			errorClass: "error",

			rules: 
			{
				email: 
				{required: true, email: true}
			},
			messages: 
			{
				email: 
				{required: 'Campo requerido', email: 'Digite um email válido'}
			},

			submitHandler: function(form) 
			{

				var dados = $('.formRecuperar');

				$.ajax(
				{

					type: "POST",
					url: '/recuperar_senha',
					data: dados.serialize(),

					beforeSend: function(data)
					{

						$('.formRecuperar .recuperarButton').text('enviando instruções...');

						$('.formRecuperar button').prop('disabled', true);

					},

					success: function(data) 
					{

						if (data == 503) 
						{
							$(".recuperarP").fadeIn();

							$(".formRecuperar").find("#email").on('click',function()
							{
								$(".recuperarP").fadeOut();
								$(this).val('');
							});
						} else if (data == 502) 
						{

						} else if (data == 200 ) 
						{
							$(".recuperarSuccess").fadeIn();

							$(".formRecuperar").find("#email").on('click',function()
							{
								$(".recuperarSuccess").fadeOut();
								$(this).val('');
							});
						} else 
						{
							$(".recuperarError").fadeIn();

							$(".formRecuperar").find("#email").on('click',function()
							{
								$(".recuperarError").fadeOut();
								$(this).val('');
							});
						}

					},

					error:function (data)
					{

                                // erro generico

                            },

                            complete: function(data)
                            {

                            	$('.formRecuperar .recuperarButton').html('enviar');

                            	$('.formRecuperar button').prop('disabled', false);

                            }
                            

                        });

			}

		});

		$("#recovery input").change( function()
		{

			$('.response').html("");

			$('#recovery button').prop("disabled", false);

		});

	}

	MANGUE.reset = function()
	{

		$(".perfil-dados-reset").validate(
		{

			errorClass: "error",

			rules: 
			{
				senha_nova: 
				{required: true, maxlength: 16, minlength: 6}, 
				confirmar_senha: 
				{ required: true, equalTo : "#senha_nova" },
			},
			messages: 
			{
				senha_nova: 
				{required: 'Campo requerido', maxlength: 'Máximo 16 caracteres', minlength: 'Mínimo 6 caracteres'},
				confirmar_senha: 
				{ required: 'Campo requerido', equalTo : "As senhas precisam ser iguais" },
			},

			submitHandler: function(form) 
			{

				var dados = $('.perfil-dados-reset');

				$.ajax(
				{
					type: "POST",
					url: '/resetar_senha',
					data: dados.serialize(),

					beforeSend: function(data)
					{
						$('.perfil-dados-reset button').text('salvando...');
						$('.perfil-dados-reset button').prop("disabled", false);
					},

					success: function(data) 
					{

						if (data == 503) 
						{
                                    //$('.response').text('Dados de autenticação inválidos.');
                                } else if (data == 502) 
                                {
                                    //$('.response').text('Preencha os campos obrigatórios.');
                                } else if( data == 504 )
                                {
                                    //$('.response').text('A senha precisa ter entre 6 a 16 caracteres.');
                                } else if( data == 505 )
                                {
                                    //$('.response').text('Senha e confirmar senha estão diferentes.');
                                } else if (data == 200 ) 
                                {

                                	$('input').val('');

                                    //$('.response').html('<span style="color:#35DE6E;"> Senha atualizada com sucesso! </span>');
                                } else 
                                {
                                    //$('.response').text('Ocorreu um erro interno, tente novamente...');
                                }


                            },

                            error:function (data) 
                            {
                                // erro generico
                            },
                            complete:function (data)
                            {
                            	$('.perfil-dados-reset button').text('salvar as alterações');
                            	$('.perfil-dados-reset button').prop("disabled", false);
                            }
                        });
			}

		});

	}

    /* ==================================================
    Init
    ================================================== */

    $(document).ready(function()
    {

        // quando quiser passar algo onload passa pela main ou outra div

        $('main[onload]').trigger('onload');

        MANGUE.mascaras();
        MANGUE.preloader();
        MANGUE.slick();
        MANGUE.contato();
        MANGUE.login();
        MANGUE.cadastro();
        MANGUE.recuperar();
        MANGUE.reset();
    });    

});

/* externas aqui embaixo */
$(function() {
	setTimeout(startConometro,3000);


	$('.navbar-eventos').find('li').hover(function() {
		$(this).find('span').css('height', '100%');
		$(this).find('p').css('color', '#FFFFFF');
	}, function() {
		$(this).find('span').css('height', '.29em');
		$(this).find('p').css('color', '#424C56');
	});


	setInterval(function()
	{
		var cores = 
		[
		"#EF525B",
		"#2EA5EF",
		"#FACF85",
		"#59CDB56"
		]


		for (var i = 0; i <= cores.length; i++) 
		{
			$("#gHeader").find('path').css('fill', cores[Math.floor(Math.random()*cores.length)]);
		}
	},2200);
});

$(function() 
{

	/*------------------------------------------------------ */

	$(".inputEmail").focus(function()
	{
		$(".borderEmail").css('width', '100%');
		$(this).css('border-bottom', 'none');

		$('.inputSenha').css('border-bottom', '1px solid #C6C6C6');
		$('.borderSenha').css('width', '0%');
	});

	$(".inputSenha").focus(function()
	{
		$(".borderSenha").css('width', '100%');
		$(this).css('border-bottom', 'none');

		$('.inputEmail').css('border-bottom', '1px solid #C6C6C6');
		$('.borderEmail').css('width', '0%');

	});

	$('.closeModal').on('click', function()
	{
		$('.Modal').fadeOut();
		$('.content').removeClass('modal-active');
	});

	$('.closeLogin').on('click', function(){
		$('html, body').animate(
			{scrollTop:0},'50');
	});
	$(".loginLink").on('click', function()
	{
		$('.content').addClass('modal-active');
		$(".Modal-login").fadeIn();

		$('html, body').animate(
			{scrollTop:165},'50');
	});

	$(".Pagamento-opcao li").on('click', function()
	{
		$('.Pagamento-opcao li').removeClass('Pagamento-opcaoOn');
		$(this).addClass('Pagamento-opcaoOn');
	});

	$(".btnPagamento").on('click', function()
	{
		$('.content').addClass('modal-active2');
		$(".Modal-conclusao").fadeIn();
	});

	$(".ContainerConclusao").find('label').on('click', function(){
		$(this).toggleClass('ConclusaoLabelOn');
	});


	$('.closeModal1').on('click', function()
	{
		$('.Modal-conclusao').fadeOut();
		$('.modal-paginaEvento').fadeOut();
		$('.modal-verMais').fadeOut();
		$('.content').removeClass('modal-active2');

	});
	$(".cadastroLink").on('click', function(){
		$('.content').addClass('modal-active');
		$(".Modal-cadastro").fadeIn();

		$('html, body').animate({scrollTop:165},'50');
	});


	$(".recuperarSenha").on("click", function() {
		$('.content').addClass('modal-active');
		$(".Modal-login").fadeOut();
		$(".Modal-recuperar").fadeIn();

		$('html, body').animate({scrollTop:165},'50');
	});

	$(".FerramentasCards").hover(function(){
		$(this).css('background-color', '#E45D57');
		$(this).css('box-shadow', '0 4px 14px 0 rgba(0,0,0,0.5)');
		$(this).find('g').css('fill', "#FFF");
		$(this).find('path').css('fill', "#FFF");
		$(this).find('h3').css('color', "#FFF");
		$(this).find('p').css('color', "#FFF");
		$(this).find('i').toggle(150);
	},
	function(){
		$(this).css('background-color', '#FFF');
		$(this).css('box-shadow', 'none');
		$(this).find('g').css('fill', "#E45D57");
		$(this).find('path').css('fill', "#E45D57");
		$(this).find('h3').css('color', "#433F3F");
		$(this).find('p').css('color', "#433F3F");
		$(this).find('i').toggle(150);
	});

	$(".FerramentasCards").on('click', function()
	{
		$('.content').addClass('modal-active2');
		$(".modal-paginaEvento").fadeIn(200);
		var texto = $(this).data('texto');
		$(".modal-paginaEvento p").text(texto);
	});
	$(".servicosBox").on('click', function()
	{
		$('.content').addClass('modal-active2');
		$(".modal-verMais").fadeIn(200);
		var texto = $(this).data('texto');
		$(".modal-verMais p").text(texto);
	});


	$(".calendarioBox").on('click', function(){
		$('.calendarioBox').removeClass('calendarioOn');
		$('.calendarioBox').find('.direito2').hide();
		$(this).addClass('calendarioOn');
		$(this).find('.direito2').show();
	});

	$(".filtroBox").on('click', function()
	{
		$(".agendaFiltroContainer").toggleClass('agendaFiltroContainerOn');
	});
});


$(function(){

	$("#slider").slider({
		range: true,
		min: 0,
		max: 250,
		step: 1,
		values: [0, 250],

		slide: function(event, ui) {
			var delay = function() {
				var handleIndex = $(ui.handle).data('index.uiSliderHandle');
				var label = handleIndex == 0 ? '#min' : '#max';
				$(label).html('$' + ui.value).position({
					my: 'center top',
					at: 'center bottom',
					of: ui.handle,
					offset: "0, 1"
				});
			};
			setTimeout(delay, 0);
		}
	});




	$('#min').html('$' + $('#slider').slider('values', 0)).position({
		my: 'center top',
		at: 'center bottom',
		of: $('#slider a:eq(0)'),
		offset: "0, 1"
	});

	$('#max').html('$' + $('#slider').slider('values', 1)).position({
		my: 'center top',
		at: 'center bottom',
		of: $('#slider a:eq(1)'),
		offset: "0, 1"
	});

});

function scroll()
{

	$(window).on("scroll", function() 
	{

		scroll = (window.innerHeight + window.scrollY) - 85;

		if ((scroll) >= document.body.offsetHeight) 
		{

			if ( window.quantidade == undefined) 
			{
				quantidade = 12;
			} else 
			{
				quantidade = quantidade + 4;
			}

			$('.btn-load').show();

			$('body').addClass('overflow');

			setTimeout(function()
			{

				var tamanho = $('#Tamanho').val();

				var preco = $('#Preco').val();

				$.ajax(
				{
					type: "GET",
					url: 'produtos_json?quantidade='+quantidade+'&tamanho='+tamanho+'&faixa_preco='+preco,
					success: function(data) 
					{

						$('#Produtos-catalogo main').empty();

						for (var i = 0; i < data.length; i++) 
						{

							$('#Produtos-catalogo main').append(
								'<div class="produtos-box">'+
								'<span class="produtos-img">'+
								'<img src="'+data[i].imagem+'">'+
								'<span class="produto-blend"></span>'+
								'<i class="icon-eye"></i>'+
								'</span>'+
								'<span class="produtos-descricao">'+
								'<a href="/produto/'+data[i].codigo_slug+'/'+data[i].slug+'" alt="'+data[i].nome+'" title="produto-nome" class="Heading-4">'+data[i].nome+'</a>'+ 
								'<a href="/produto/'+data[i].codigo_slug+'/'+data[i].slug+'" alt="'+data[i].nome+'" title="produto-nome" class="Display-3 parcelas">6x de '+data[i].preco_dividido+'</a>'+ 
								'<a href="/produto/'+data[i].codigo_slug+'/'+data[i].slug+'" alt="'+data[i].nome+'" title="produto-nome" class="Display-3 preco">'+data[i].preco+'</a>'+ 
								'</span>'+
								'</div>'
								);

						}

					}
				});

			}, 1000);

            //$(document).unbind('scroll');

            $('body').removeClass('overflow');

            $('.btn-load').hide();
            
        }

    });

}

var segundo = 60;
var minuto = 13;

function startConometro() 
{
	ponto = ":"
	if((segundo - 1) >= 0) 
	{ 
		segundo = segundo - 1;

		if(segundo <10)
		{
			segundo="0"+segundo;
		}
		if(minuto < 1)
		{
			$('.contador').css("color", '#f3545c');
		}
		if(segundo == 0) 
		{
			minuto--;
			segundo = 59;
		}    

		if(minuto < 0 &&  segundo == 10) 
		{

			$('.contador').css("font-size", '2em');
			minuto = 'Cancelado';
			segundo = ' ';
			ponto = "";

            // Aqui faz a função

        }

        minutof = "";

        if(minuto <10)
        {
        	minutof ="0"+minuto;
        }else
        {
        	minutof = minuto;
        }

        $(".contador").text(minutof+ponto+segundo);
        

        setTimeout('startConometro();', 1000);
    }
}



/*  ( pedro verificar se é reutilizavel  ) */ 
// é a função do menu responsivo .. a blz apaguei no automaticokkk

function menuAtivo() 
{
	$(".menu-abrir").on("click", function() 
	{
		document.documentElement.classList.add('menu-ativo')
	})
}

function fechaMenu() 
{
	$(".menu-fechar").on("click", function() 
	{
		document.documentElement.classList.remove('menu-ativo')
	});

}
