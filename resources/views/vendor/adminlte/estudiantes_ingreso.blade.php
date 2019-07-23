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
						<div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">General Elements</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form id="fff" role="form" method="post" action="{{url('/estudiantes')}}">
                                @csrf
                                
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input id="nombre" name="nombre" type="text" class="form-control" placeholder="ingrese nombre">
                                </div>
                                <div class="form-group">
                                    <label>apellido</label>
                                    <input id="apellido" name="apellido" type="text" class="form-control" placeholder="ingrese  apellido">
                                </div>
                                <div class="form-group">
                                    <label>cedula</label>
                                    <input id="cedula" name="cedula" type="text" class="form-control" placeholder="ingrese cedula">
                                </div>
                                <div class="form-group">
                                    <label>Nivel</label>
                                    <!-- <input name="nivel" type="text" class="form-control" placeholder="ingrese Nivel"> -->
                                    <select  class="combobox form-control" name="nivel">
                                        <option value="" selected="selected">Seleccionar Nivel</option>
                                        @foreach($datos1 as $item)
                                        <option value="{{$item->id}}">{{$item->descripcion}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button onclick='swal("Guardado!", "Click en OK", "Exitoso")' id="enviar1" type="submit" class="btn btn-success">Guardar</button>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <div class="box box-warning">
                        <table class="table table-bordereds">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Cedula</th>
                                <th scope="col">Nivel</th>
                                
                            </tr>
                        </thead>
                        <tbody id="datos1">
                            @foreach($datos as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->apellido}}</td>
                                    <td>{{$item->cedula}}</td>
                                    @foreach($datos1 as $item1)
                                        @if($item->nivelid == $item1->id)
                                            <td>{{$item1->descripcion}}</td>
                                        @endif
                                    @endforeach
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection