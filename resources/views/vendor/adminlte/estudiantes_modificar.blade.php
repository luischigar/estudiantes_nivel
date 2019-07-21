@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Modificars</div>

					<div class="panel-body">
						<div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">General Elements</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form" method="post" action="{{url('estudiantes_actualizar',$datos->id)}}">
                                @method('PUT')
                                @csrf
                                
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input value="{{$datos->nombre}}" name="nombre" type="text" class="form-control" placeholder="ingrese nombre">
                                </div>
                                <div class="form-group">
                                    <label>apellido</label>
                                    <input value="{{$datos->apellido}}" name="apellido" type="text" class="form-control" placeholder="ingrese  apellido">
                                </div>
                                <div class="form-group">
                                    <label>cedula</label>
                                    <input value="{{$datos->cedula}}" name="cedula" type="text" class="form-control" placeholder="ingrese cedula">
                                </div>
                                <div class="form-group">
                                    <label>Nivel</label>
                                    <!-- <input name="nivel" type="text" class="form-control" placeholder="ingrese Nivel"> -->
                                    <select class="combobox form-control" name="nivel">
                                        @foreach($datos1 as $item)
                                        @if($item->id == $datos->nivelid)
                                        <option value="{{$datos->nivelid}}" selected="selected">{{$item->descripcion}}</option>
                                        @endif
                                        @endforeach
                                        @foreach($datos1 as $item)
                                        @if($item->id != $datos->nivelid)
                                        <option value="{{$item->id}}">{{$item->descripcion}}</option>
                                         @endif
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" id="enviar" class="btn btn-success">Modificar</button>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection