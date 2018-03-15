<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View;

class AgendaController extends Controller {

	public function agenda(){
		return view("agenda");
	}
 
 
}
