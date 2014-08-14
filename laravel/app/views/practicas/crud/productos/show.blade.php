@extends ('practicas/crud/layout')
@section ('title') Ver Producto @stop
@section ('content')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                Producto
            </div>
            <!-- /.panel-heading -->

			<div class="panel-body">
				<p></p>Nombre:{{$producto->producto}}</p>
				<p></p>Status:{{$producto->estado}}</p>
				<p></p>Fecha de Alta:{{$producto->created_at}}</p>
				<p></p>Fecha de Modificacion:{{$producto->updated_at}}</p>				
			</div>
			      <p>
                  <a href="{{route('crud.edit', $producto->id)}}"class="btn btn-info">Editar</a>
                  </p>
{{ Form::model($producto, array('route' => array('crud.destroy', $producto->id), 'method' => 'DELETE', 'role' => 'form')) }}
  <div class="row">
    <div class="form-group col-md-4">
        {{ Form::submit('Eliminar producto', array('class' => 'btn btn-danger')) }}
    </div>
  </div>
{{ Form::close() }}		                        
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
            <!-- /.row -->
@stop