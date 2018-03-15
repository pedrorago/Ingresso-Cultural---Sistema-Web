<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;
use Validator;
use View;
use App\Pedido;
use App\Usuario;
use App\Entrega;

class PerfilController extends Controller {
 
 	public function index() {
        
        return view('perfil');

 	}
}
