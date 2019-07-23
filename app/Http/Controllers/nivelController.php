<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nivel;

class nivelController extends Controller
{
	public function ventana()
	{
		$consulta = Nivel::all();
		return view('adminlte::nivel_ingreso')->with('datos',$consulta);
	}
    public function guardar(Request $request){
	    if($request->ajax()){
		    $nivel = new Nivel();
		    
		    $nivel->descripcion = $request->descripcion;
		   

		    $nivel->save();
		    //dd($nivel->descripcion);
		    
		    //return view('adminlte::nivel_ingreso');
		    return response()->json(['mensaje'=> 'Datos Correctos']);
		}
	    
	}
	public function listar(){
	    $consulta = Nivel::all();
	    return view('adminlte::nivel_listar')->with('datos',$consulta);
	}
	public function eliminar(Request $request, $id)
	{
		//if($request->ajax()){
		$consulta = Nivel::findOrFail($id);

		$consulta->delete();

		$consulta = Nivel::all();
	    return view('adminlte::nivel_listar')->with('datos',$consulta);
	    //return response()->json(['mensaje'=> 'Datos Correctos']);
		//}
	}
	public function editar($id)
	{
		$consulta = Nivel::findOrFail($id);

		 return view('adminlte::nivel_modificar')->with('datos',$consulta);

	}
	public function modificar(Request $request, $id)
	{
		$consulta = Nivel::findOrFail($id);

		$consulta->descripcion = $request->descripcion;

		$consulta->save();
		return redirect('nivel/eliminar_modificar');
	}
}
