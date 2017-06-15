{{ Form::open(['route' => 'alumnos.store']) }}






<div class="widget-header widget-header-blue widget-header-flat">
	<h4 class="widget-title lighter">Nuevo Alumno</h4>
		
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
					<h3 class="lighter block ">Ingrese la Informacion del Alumno</h3>
					<hr>
					<div class="form-group">
						<div class="row">
							<label for="nombre" class="col-xs-8 col-sm-2 control-label no-padding-right">Nombre</label>
								<div class="col-xs-12 col-sm-5">
									<span class="block input-icon input-icon-right">
										<input id="nombre" name="nombre"   class="width-100" type="text">									
									</span>
								</div>
						</div>
											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="apellido" class="col-xs-8 col-sm-2 control-label no-padding-right">Apellido</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="apellido" name="apellido"   class="width-100" type="text">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="cedula" class="col-xs-8 col-sm-2 control-label no-padding-right">Cedula</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="cedula" name="cedula"   class="width-100" type="text">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="fache_nac" class="col-xs-8 col-sm-2 control-label no-padding-right">Fache de Nacimiento</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="fache_nac" name="fache_nac"   class="width-100" type="date">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="direccion" class="col-xs-8 col-sm-2 control-label no-padding-right">Direccion</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="direccion" name="direccion"   class="width-100" type="text">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="telefono" class="col-xs-8 col-sm-2 control-label no-padding-right">Telefono</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="telefono" name="telefono"   class="width-100 input-mask-phone" type="text">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="email" class="col-xs-8 col-sm-2 control-label no-padding-right">Correo</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="email" name="email"   class="width-100" type="text">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="banco" class="col-xs-8 col-sm-2 control-label no-padding-right">Banco</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="banco" name="banco"   class="width-100" type="text">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="nro_cuenta" class="col-xs-8 col-sm-2 control-label no-padding-right">Numero de Cuenta</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="nro_cuenta" name="nro_cuenta"   class="width-100" type="text">									
								</span>
							</div>
						</div>											    
					</div>
					
					<h3 class="lighter block ">Ingrese la Informacion del Representante</h3>
					<hr>
					<div class="form-group">
						<div class="row">
							<label for="nombre" class="col-xs-8 col-sm-2 control-label no-padding-right">Nombre</label>
								<div class="col-xs-12 col-sm-5">
									<span class="block input-icon input-icon-right">
										<input id="nombre_re" name="representante[nombre]"   class="width-100" type="text">									
									</span>
								</div>
						</div>
											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="apellido" class="col-xs-8 col-sm-2 control-label no-padding-right">Apellido</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="apellido_re" name="representante[apellido]"   class="width-100" type="text">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="cedula" class="col-xs-8 col-sm-2 control-label no-padding-right">Cedula</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="cedula_re" name="representante[cedula]"   class="width-100" type="text">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="fache_nac" class="col-xs-8 col-sm-2 control-label no-padding-right">Fache de Nacimiento</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="fache_nac_re" name="representante[fecha_nac]"   class="width-100 date-picker" type="date">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="direccion" class="col-xs-8 col-sm-2 control-label no-padding-right">Direccion</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="direccion_re" name="representante[direccion]"   class="width-100" type="text">									
								</span>
							</div>
						</div>											    
					</div>
					<div class="form-group">
						<div class="row">
							<label for="telefono" class="col-xs-8 col-sm-2 control-label no-padding-right">Telefono</label>
							<div class="col-xs-12 col-sm-5">
								<span class="block input-icon input-icon-right">
									<input id="telefono_re" name="representante[telefono]"   class="width-100" type="text">									
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
