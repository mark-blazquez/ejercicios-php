<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;
use App\Models\productos;
use Illuminate\Http\Request;

class ProductosContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct(){
		$this->middleware("auth");
	}
    public function index()
    {
        //
		$productos=productos::all();
		return view("administrador.administrador",array("productos"=>$productos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view("administrador.create");
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		//$datosProductos=request()->all();
		//return $datosProductos
		request()->validate([
			"nombre"=>"required",
			"categoria"=>"required",
			"imagen"=>"required"
		]);
		//return request(["nombre"]);
		productos::create([
			"nombre"=>request("nombre"),
			"categoria"=>request("categoria"),
			"imagen"=>request("imagen"),
		]);
		return view("administrador.accion");
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
		$productos=productos::all();
		return view("administrador.show",array("productos"=>$productos));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	
	public function mostrarupdate()
    {
        //
		$productos=productos::all();
		return view("administrador.update",array("productos"=>$productos));
		
    }
    public function update()
    {
        //
		request()->validate([
			"id"=>"required",
			"nombre"=>"required",
			"categoria"=>"required",
			"imagen"=>"required",
		]);

		DB::table('productos')
            ->where('id',request("id"))
            ->update([
				'nombre' => request("nombre"),
				'categoria' => request("categoria"),
				'imagen' => request("imagen")
			]);
		return view("administrador.accion");
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function destroy()
    {
        //
		request()->validate([
			"id"=>"required"
		]);
		productos::destroy([
			"id"=>request("id")
		]);
		return view("administrador.accion");
    }
}
