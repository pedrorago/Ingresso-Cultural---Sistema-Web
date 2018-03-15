<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View;

class ProdutoresController extends Controller {

	public function paraProdutores(){
		return view("paraProdutores");
	}
	
}
