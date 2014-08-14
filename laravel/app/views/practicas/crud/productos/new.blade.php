@extends ('practicas/crud/layout')
@section ('title') Nuevo Producto @stop
@section ('content')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
            <div class="panel-heading">
               Nuevo Producto
            </div>
            <!-- /.panel-heading -->

			<div class="panel-body">
					{{ Form::open(array('route' => 'crud.store', 'method' => 'POST'), array('role' => 'form')) }}

					  <div class="row">
					    <div class="form-group col-md-12">
					      {{ Form::label('nombre', 'Producto:') }}
					      {{ Form::text('nombre', null, array('placeholder' => 'Introduce el nombre del producto...', 'class' => 'form-control')) }}
					    </div>
					  </div>  
					  <div class="row">

					    <div class="form-group col-md-12">
					      {{ Form::label('activo', 'Activo') }}
					      {{ Form::radio('activo', '1', true) }}
					      {{ Form::label('activo', 'Inactivo') }}
					      {{ Form::radio('activo', '0') }}
					    </div>
					  </div>

					  {{ Form::button('Registar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
					  
					{{ Form::close() }}
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
            <!-- /.row -->					
@stop