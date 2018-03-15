<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View;

class ResumoController extends Controller {

	public function resumo(){
		return view("resumo");
	}
}
