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

    	$estudiantes = new Estudiantes();
	    
	    $estudiantes->nombre = $request->nombre;
	    $estudiantes->apellido = $request->apellido;
	    $estudiantes->cedula = $request->cedula;
	    $estudiantes->nivelid = $request->post("nivel");
	    //dd($estudiantes->nivelid);

	    $estudiantes->save();
	    
	    return view('adminlte::estudiantes_ingreso')->with('datos',$consulta);
	}
	public function listar(){
		$consulta = Estudiantes::all();
		$datos = Nivel::all();
		foreach($datos as $item1) {
			foreach ($consulta as $item2) {
				if ($item2->nivelid == $item1->id) {
					$item2->nivelid = $item1->descripcion;
				}
			}
	   	
	    }
	    return view('adminlte::estudiantes_listar')->with('datos',$consulta);
	}
	public function eliminar($id)
	{
		$consulta1 = Estudiantes::findOrFail($id);

		$consulta1->delete();

		$consulta = Estudiantes::all();
		$datos = Nivel::all();
		foreach($datos as $item1) {
			foreach ($consulta as $item2) {
				if ($item2->nivelid == $item1->id) {
					$item2->nivelid = $item1->descripcion;
				}
			}
	   	
	    }
	    return view('adminlte::estudiantes_listar')->with('datos',$consulta);
	}
}
