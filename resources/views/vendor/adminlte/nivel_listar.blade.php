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
                                <th scope="col">Descripcion</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                
                            </tr>
                            
                        </tbody>
                    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection