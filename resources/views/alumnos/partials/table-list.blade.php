<table id="dynamic-table"  class="table  table-bordered table-hover dataTable no-footer">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cedula</th>
			<th>fecha_nac</th>
			<th>direcion</th>
			<th>telefono</th>
			<th>email</th>
			<th>banco</th>
			<th>nro_cuenta</th>
			<th></th>
			





		</tr>
	</thead>

	<tbody>
		@foreach($alumnos as $alumno)
			<tr>
				<td>{{ $alumno->id }}</td>
				<td>{{ $alumno->nombre }}</td>
				<td>{{ $alumno->apellido }}</td>
				<td>{{ $alumno->cedula }}</td>
				<td>{{ $alumno->fecha_nac }}</td>
				<td>{{ $alumno->direcion }}</td>
				<td>{{ $alumno->telefono }}</td>
				<td>{{ $alumno->email }}</td>
				<td>{{ $alumno->banco }}</td>
				<td>{{ $alumno->nro_cuenta }}</td>

				<td>
					<a href="{{ route('alumnos.show',$alumno->id) }}" class="btn btn-xs btn-info" title="ver"><i class="ace-icon fa fa-eye "></i></a>
					<a href="{{ route('alumnos.edit',$alumno->id) }}" class="btn btn-xs btn-success" title="editar"><i class="ace-icon fa fa-pencil"></i></a>
					<a href="{{ url('alumnos/cargar-nota',$alumno->id) }}" class="btn btn-xs btn-primary" title="cargar nota"><i class="ace-icon fa fa-plus"></i></a>
					<a href="{{ route('alumnos.destroy',$alumno->id) }}" class="btn btn-xs btn-danger" title="eliminar"><i class="ace-icon fa fa-trash-o"></i></a>

					
															
					
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

<script type="text/javascript">

$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );

</script>