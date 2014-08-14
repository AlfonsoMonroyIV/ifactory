@extends ('practicas/crud/layout')
@section ('title') Editar Producto @stop
@section ('content')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                Editar Producto
            </div>
            <!-- /.panel-heading -->

			<div class="panel-body">
			{{$producto->id}}

			{{$producto->producto}}
			
			{{$producto->estado}}
{{Form::model($producto, array('route' =>array('crud.update', $producto->id), 'method' => 'PATCH', 'role' => 'form'))}}
	{{Form::label('nombre','Nombre:')}}
	{{Form::text('producto',null, array('placeholder' => 'Introduce el nombre del producto', 'class' => 'form-control'))}}
<div class='form-group col-md-12'>
<?php 
if ($producto->estado==1)
  echo 
  Form::label('activo', 'Activo '),
  Form::radio('activo', '1', true),
  Form::label('activo', 'Inactivo '),
  Form::radio('activo', '0');
else
	echo
  Form::label('activo', 'Activo'),
  Form::radio('activo', '1'),
  Form::label('activo', 'Inactivo'),
  Form::radio('activo', '0', true);
?>
</div>
{{Form::button('Actualziar Producto', array('type' => 'submit', 'class' => 'btn btn-primary'))}}
{{Form::close()}}
				</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
            <!-- /.row -->
@stop