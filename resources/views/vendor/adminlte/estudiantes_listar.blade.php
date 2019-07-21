@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						<table class="table table-bordereds">
                        <thead> 
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">cedula</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                           @foreach($datos as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->apellido}}</td>
                                <td>{{$item->cedula}}</td>
                                @foreach($datos1 as $item1)
                                @if($item->nivelid == $item1->id)
                                <td>{{$item1->descripcion}}</td>
                                @endif
                                @endforeach
                                <td>
                                    <a href="{{url('estudiantes_editar', $item->id)}}" type="button" class="btn btn-block btn-success">Modificar</a></td>
                                <td>

                                    <form method="post" action="{{route('estudiantes_eliminar',$item->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <!-- <input type="hidden" name="_mothod" value="delete"> -->
                                        <button type="submit" class="btn btn-block btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection