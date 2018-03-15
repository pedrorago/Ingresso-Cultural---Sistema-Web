<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View;

class EventosController extends Controller {

	public function todos_eventos(){
		return view("eventos");
	}
 	public function info(){
		return view("evento");
	}
 
}
