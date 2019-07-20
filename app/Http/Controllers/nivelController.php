<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nivelController extends Controller
{
    public function guardar(Request $request){
	    //$msg = "hola"; 
	    //dd($msg);
	    //dd($request->all());
	    //$producto = new Producto();
	    //$producto->descripcion = 'ff';
	    //$producto->precio = 20;
	    //$producto->cantidad = 2;
	    //$producto->descripcion = $request->descripcion;
	   // $producto->precio = $request->precio;
	    //$producto->cantidad = $request->cantidad;

	    //$producto->save();
	    //dd('guardado');
	    return view('adminlte::nivel_ingreso');
	    //return response()->json(['mensaje'=> 'Datos Correctos']);
	}
	public function listar(){
	    //$consulta = Producto::all();
	    return view('adminlte::nivel_listar');
	    //->with('datos',$consulta);
	}
}
