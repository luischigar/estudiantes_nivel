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
                            <form role="form" method="post" action="{{url('/estudiantes')}}">
                                @csrf
                                
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input name="nombre" type="text" class="form-control" placeholder="ingrese nombre">
                                </div>
                                <div class="form-group">
                                    <label>apellido</label>
                                    <input name="apellido" type="text" class="form-control" placeholder="ingrese  apellido">
                                </div>
                                <div class="form-group">
                                    <label>cedula</label>
                                    <input name="cedula" type="text" class="form-control" placeholder="ingrese cedula">
                                </div>
                                <div class="form-group">
                                    <label>Nivel</label>
                                    <input name="nivel" type="text" class="form-control" placeholder="ingrese Nivel">
                                </div>
                                <button type="submit" id="enviar" class="btn btn-success">Guardar</button>
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