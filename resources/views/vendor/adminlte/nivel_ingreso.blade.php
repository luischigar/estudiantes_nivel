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
	                            <form role="form" method="post" action="{{url('/nivel')}}">
	                                @csrf
	                                
	                                <!-- text input -->
	                                <div class="form-group">
	                                    <label>Descripcion</label>
	                                    <input name="descripcion" type="text" class="form-control" placeholder="ingrese descripcion">
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