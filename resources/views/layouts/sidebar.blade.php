		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					{{-- <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div> --}}

					{{-- <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div> --}}
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					{{-- opciones de Inicio --}}
					<li class="">
						<a href="#">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					{{-- fin Inicio --}}

					{{-- opciones de Alumno --}}
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users "></i>
							<span class="menu-text">
								Alumnos
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							
							<li class="">
								<a href="{{ route('alumnos.index') }}" >
									<i class="menu-icon fa fa-caret-right"></i>
									Lista									
								</a>								
							</li>
							<li class="">
								<a href="{{ route('alumnos.create') }}" >
									<i class="menu-icon fa fa-caret-right"></i>
									Nuevo									
								</a>								
							</li>
							{{-- <li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Datos Personales									
								</a>								
							</li>

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Datos Academicos									
								</a>								
							</li>

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Representante									
								</a>								
							</li> --}}

						</ul>
					</li>
					{{-- fin opciones de Alumno --}}

					{{-- opciones de Becas --}}
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Becas
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{ url('becas/estudio') }}" >
									<i class="menu-icon fa fa-caret-right"></i>
									Estudio									
								</a>								
							</li>

							<li class="">
								<a href="{{ url('becas/ayudantia') }}" >
									<i class="menu-icon fa fa-caret-right"></i>
									Ayudantia									
								</a>								
							</li>

						</ul>
					</li>
					{{-- fin opciones de Becas --}}

					{{-- opciones de Reportes --}}
					<li class="">
						<a href="#" class="">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text">
								Reportes
							</span>
							
						</a>
					</li>
					{{-- fin opciones de Reportes --}}
					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>