<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller {

	public function sobre(){
		return view('sobre');
	}

	public function contato(){
		return view('contato');
	}

	public function como_funciona(){
		return view('como_funciona');
	}

	public function precos(){
		return view('precos');
	}

	public function fale_conosco(){
		return view('fale_conosco');
	}
 
}
