@extends ('practicas/crud/layout')
@section ('title') Productos Lista @stop
@section ('content')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                Productos
            </div>
            <!-- /.panel-heading -->

			<div class="panel-body">
				<div class="table-responsive" id="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="DataTableProducto">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Status</th>
								<th>Fecha de creación</th>
								<th>Fecha de Actualización</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
						
							@foreach ($productos as $producto)
							<tr>
							<td>{{ $producto->producto }}</td>
							<td> 
								<?php 
							       if($producto->estado==1)echo 'Activo';
									else
									echo 'Inactivo';
								?> 
							</td>
							<td>{{ $producto->created_at }}</td>
							<td>{{ $producto->updated_at }}</td>
							<td>Eliminar</td>
						    </tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
            <!-- /.row -->
@stop