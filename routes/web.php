<?php

/* rotas de dev */

Route::get('/versao', 'PaginasController@versao');

/* rotas de login / logout / recuperação / reset de senha e  confirmação e cadastro */

Route::get('login',array('as'=>'login',function(){
	return redirect('/');
}));

Route::post('/login', 'LoginController@login');

//Route::get('/reenviar_confirmacao', 'LoginController@reenviar_confirmacao');

Route::get('/resetar_senha', 'LoginController@reset_view');

Route::post('/resetar_senha', 'LoginController@reset');

Route::post('/recuperar_senha', 'LoginController@recuperar');


Route::post('/cadastro', 'CadastroController@cadastro');

Route::get('/confirmacao', 'CadastroController@confirmacao');

/* fim rotas de login/cadastro e etc... */


/* categorias + rotas de filtros de categorias */

Route::get('/categoria/{slug}', 'CategoriaController@index');

Route::get('/evento/{cod}/{slug}', 'EventoController@info'); // single


Route::get('/evento', 'EventosController@info'); // single


Route::get('/resumo', 'ResumoController@resumo');

Route::get('/produtores', 'ProdutoresController@paraProdutores');






/* fim de categorias + rotas de filtros de categorias */


/* fim de rotas carrinho de compras */

/* ir para o checkout */

Route::get('/finalizar', 'PagamentoController@finalizar');


/* rotas de páginas fixas */

Route::get('/sobre', 'PaginasController@sobre');

Route::get('/como_funciona', 'PaginasController@como_funciona');

Route::get('/precos', 'PaginasController@precos');

Route::get('/fale_conosco', 'PaginasController@fale_conosco');

/* fim páginas */

/* home */

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/eventos', 'EventosController@todos_eventos');

Route::get('/agenda', 'AgendaController@agenda');

Route::get('/mapacultural', 'MapaCulturalController@mapa');

Route::get('/aconteceu', 'AconteceuController@aconteceu');



Route::group(['middleware' => 'auth'], function () {

	/* logout */

	Route::get('/logout', 'LoginController@logout');

	/* area de usuario */

	Route::get('/criar_evento', 'PerfilController@index');

	Route::get('/meus_eventos/', 'PerfilController@pedidos');

	Route::get('/meus_ingressos/', 'PerfilController@pedidos');

	/* fim area de usuario */

});
