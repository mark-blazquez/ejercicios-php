<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function index()
    {
        return view('pantallainicial');
    }
	public function productos()
    {
        return view('productos');
    }
	public function administrador()
    {
        return view('administrador');
    }
	public function cliente()
    {
        return view('cliente');
    }
}
