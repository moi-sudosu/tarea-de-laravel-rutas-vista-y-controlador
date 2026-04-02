<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

// aqui lo que hacemos es crear un controlador que devolvera la vista home gracias a que web.php lo que hace es atrapar al usuario y devolver hacia la vista home.
class HomeController extends Controller
{
public function index(){
    return view('home');
}

public function ingresos(){
    return view('ingresos');
}

public function compras(){
    return view('compras');
}

public function ropa(){
    return view('ropa');
}

public function login(){
    return view('login');
}
}





