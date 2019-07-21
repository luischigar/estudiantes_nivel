<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiantes;
use App\Nivel; 

class estudiantesController extends Controller
{
	public function ventana()
	{
		$consulta = Nivel::all();
		return view('adminlte::estudiantes_ingreso')->with('datos',$consulta);
	}
    public function guardar(Request $request){
    	$consulta = Nivel::all();
	    
	    return view('adminlte::estudiantes_ingreso')->with('datos',$consulta);
	}
	public function listar(){
	    return view('adminlte::estudiantes_listar');
	}
}
