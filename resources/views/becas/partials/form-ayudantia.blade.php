{{ Form::open(['url' => 'becas/store-ayudantia']) }}

<div class="widget-header widget-header-blue widget-header-flat">
	<h4 class="widget-title lighter">Nueva Beca Ayudantia</h4>
		
</div>

<div class="widget-body">
	<div class="widget-main">
		<div id="fuelux-wizard-container" class="no-steps-container">
			{{-- <div>
				<ul class="steps" style="margin-left: 0">
					<li data-step="1" class="active">
						<span class="step">1</span>
						<span class="title">Datos Personales</span>
					</li>
					<li data-step="2">
						<span class="step">2</span>
						<span class="title">Datos Academicos</span>
					</li>
					<li data-step="3">
						<span class="step">3</span>
						<span class="title">Representante</span>
					</li>

				</ul>
			</div> --}}

			

			<div class="step-content pos-rel">
				<div class="step-pane active" data-step="1">
					<h3 class="lighter block ">Ingrese los datos</h3>
					<hr>
					<div class="form-group">
						<div class="row">
							<label for="lapso" class="col-xs-8 col-sm-2 control-label no-padding-right">Alumno</label>
								<div class="col-xs-12 col-sm-5">
									<span class="block input-icon input-icon-right">
										<select class="form-control" id="alumno_id" name="alumno_id">
											<option value=""></option>
											@foreach($alumnos as $alumno)
											 <option value="{{ $alumno->id }}">{{ $alumno->cedula }}</option>
											@endforeach
										</select>									
									</span>
								</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="grupo_familiar" class="col-xs-8 col-sm-2 control-label no-padding-right">Grupo Familiar</label>
								<div class="col-xs-12 col-sm-5">
									<span class="block input-icon input-icon-right">
										<select class="form-control" id="grupo_familiar" name="grupo_familiar">
											<option value=""></option>											
											<option value="1">1-2 Personas</option>
											<option value="2">3-5 Personas</option>
											<option value="3">6-8 Personas</option>
											<option value="4">9-mas Personas</option>
										
										</select>									
									</span>
								</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="ingreso_familiar" class="col-xs-8 col-sm-2 control-label no-padding-right">Fuente de Ingreso Familiar</label>
								<div class="col-xs-12 col-sm-5">
									<span class="block input-icon input-icon-right">
										<select class="form-control" id="ingreso_familiar" name="ingreso_familiar">
											<option value=""></option>											
											<option value="4">Sueldo Mensual</option>
											<option value="3">Sueldo Semanal</option>
											<option value="2">Honorarios Profesional</option>
											<option value="1">Fortuna - Herencia</option>										
										</select>									
									</span>
								</div>
						</div>											    
					</div>

					<div class="form-group">
						<div class="row">
							<label for="vivienda_familiar" class="col-xs-8 col-sm-2 control-label no-padding-right">Condiciones de la Vivienda</label>
								<div class="col-xs-12 col-sm-5">
									<span class="block input-icon input-icon-right">
										<select class="form-control" id="vivienda_familiar" name="vivienda_familiar">
											<option value=""></option>											
											<option value="3">Alquilada</option>
											<option value="2">Familiar</option>
											<option value="1">Propia</option>										
										</select>									
									</span>
								</div>
						</div>											    
					</div>
				
					
				</div>
				{{-- <div class="step-pane" data-step="2">
					<div>

					</div>
				</div>

				<div class="step-pane" data-step="3">
					<div class="center">
						<h3 class="blue lighter">This is step 3</h3>
					</div>
				</div>

				<div class="step-pane" data-step="4">
					<div class="center">
						<h3 class="green">Congrats!</h3>
						Your product is ready to ship! Click finish to continue!
					</div>
				</div> --}}
			</div>
		</div>
		<hr>
		<div class="wizard-actions">
			{{-- <button class="btn btn-prev" disabled="disabled">
				<i class="ace-icon fa fa-arrow-left"></i>
				Prev
			</button>
	
			<button class="btn btn-success btn-next" data-last="Finish">
				Next
				<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
			</button> --}}
			<a href="{{ url()->previous() }}" class="btn bnt-default" >Atras</a>
			<button class="btn btn-primary">Guardar </button>
			
		</div>
	</div><!-- /.widget-main -->
</div><!-- /.widget-body -->
{{ Form::close() }}
