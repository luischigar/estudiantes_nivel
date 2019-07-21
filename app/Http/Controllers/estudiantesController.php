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

	    $estudiantes->save();
	    
	    return view('adminlte::estudiantes_ingreso')->with('datos',$consulta);
	}
	public function listar(){
		$consulta = Estudiantes::all();
		$datos1 = Nivel::all();
		
	    return view('adminlte::estudiantes_listar', compact('datos1', $datos1))->with('datos',$consulta);
	}
	public function eliminar($id)
	{
		$consulta1 = Estudiantes::findOrFail($id);

		$consulta1->delete();

		$consulta = Estudiantes::all();
		$datos1 = Nivel::all();
		
	    return view('adminlte::estudiantes_listar', compact('datos1', $datos1))->with('datos',$consulta);
	}
	public function editar($id)
	{
		$consulta = Estudiantes::findOrFail($id);
		$datos1 = Nivel::all();
		 return view('adminlte::estudiantes_modificar', compact('datos1', $datos1))->with('datos',$consulta);

	}
	public function modificar(Request $request, $id)
	{
		$consulta = Estudiantes::findOrFail($id);

		$consulta->nombre = $request->nombre;
		$consulta->apellido = $request->apellido;
		$consulta->cedula = $request->cedula;
		$consulta->nivelid = $request->post("nivel");

		$consulta->save();
		return redirect('estudiantes/eliminar_modificar');
	}
}
