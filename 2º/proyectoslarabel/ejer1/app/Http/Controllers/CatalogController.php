<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Movie;

class CatalogController extends Controller
{

    public function getIndex(){
		$movies=Movie::all();
		return view('catalog.index',array("arrayPeliculas"=>$movies));
	}

	function getShow($id){
		$movies=Movie::findOrFail($id);
		return view('catalog.show', array("arrayPeliculasid"=>$movies));
	}

	function getCreate(){
		return view("catalog.create");
	}

	function getEdit($id){
		$movies = Movie::findOrFail($id);
		return view('catalog.edit', array("arrayPeliculasid"=>$movies));
	}
}
?>
