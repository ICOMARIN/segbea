{{ Form::open(['route' => 'alumnos.store']) }}

{{ Form::close() }}




<div class="widget-header widget-header-blue widget-header-flat">
	<h4 class="widget-title lighter">Nuevo Alumno</h4>
		
</div>

<div class="widget-body">
	<div class="widget-main">
		<div id="fuelux-wizard-container" class="no-steps-container">
			<div>
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
			</div>

			<hr>

			<div class="step-content pos-rel">
				<div class="step-pane active" data-step="1">
					<h3 class="lighter block ">Ingrese la Informacion de Alumno</h3>

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
						<label for="apellido" class="col-xs-12 col-sm-3 control-label no-padding-right">Apellido</label>
						<div class="col-xs-12 col-sm-12">
							<span class="block input-icon input-icon-right">
								<input id="apellido" name="apellido"   class="width-100" type="text">									
							</span>
						</div>					    
					</div>



														<form class="form-horizontal hide" id="validation-form" method="get" novalidate="novalidate">
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input name="email" id="email" class="col-xs-12 col-sm-6" type="email">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input name="password" id="password" class="col-xs-12 col-sm-4" type="password">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Confirm Password:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input name="password2" id="password2" class="col-xs-12 col-sm-4" type="password">
																	</div>
																</div>
															</div>

															<div class="hr hr-dotted"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Company Name:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input id="name" name="name" class="col-xs-12 col-sm-5" type="text">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Phone Number:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="ace-icon fa fa-phone"></i>
																		</span>

																		<input id="phone" name="phone" type="tel">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">Company URL:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input id="url" name="url" class="col-xs-12 col-sm-8" type="url">
																	</div>
																</div>
															</div>

															<div class="hr hr-dotted"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right">Subscribe to</label>

																<div class="col-xs-12 col-sm-9">
																	<div>
																		<label>
																			<input name="subscription" value="1" class="ace" type="checkbox">
																			<span class="lbl"> Latest news and announcements</span>
																		</label>
																	</div>

																	<div>
																		<label>
																			<input name="subscription" value="2" class="ace" type="checkbox">
																			<span class="lbl"> Product offers and discounts</span>
																		</label>
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right">Gender</label>

																<div class="col-xs-12 col-sm-9">
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="1" class="ace" type="radio">
																			<span class="lbl"> Male</span>
																		</label>
																	</div>

																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="2" class="ace" type="radio">
																			<span class="lbl"> Female</span>
																		</label>
																	</div>
																</div>
															</div>

															<div class="hr hr-dotted"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">State</label>

																<div class="col-xs-12 col-sm-9">
																	<select id="state" name="state" class="select2 select2-hidden-accessible" data-placeholder="Click to Choose..." style="width: 200px;" tabindex="-1" aria-hidden="true">
																		<option value="">&nbsp;</option>
																		<option value="AL">Alabama</option>
																		<option value="AK">Alaska</option>
																		<option value="AZ">Arizona</option>
																		<option value="AR">Arkansas</option>
																		<option value="CA">California</option>
																		<option value="CO">Colorado</option>
																		<option value="CT">Connecticut</option>
																		<option value="DE">Delaware</option>
																		<option value="FL">Florida</option>
																		<option value="GA">Georgia</option>
																		<option value="HI">Hawaii</option>
																		<option value="ID">Idaho</option>
																		<option value="IL">Illinois</option>
																		<option value="IN">Indiana</option>
																		<option value="IA">Iowa</option>
																		<option value="KS">Kansas</option>
																		<option value="KY">Kentucky</option>
																		<option value="LA">Louisiana</option>
																		<option value="ME">Maine</option>
																		<option value="MD">Maryland</option>
																		<option value="MA">Massachusetts</option>
																		<option value="MI">Michigan</option>
																		<option value="MN">Minnesota</option>
																		<option value="MS">Mississippi</option>
																		<option value="MO">Missouri</option>
																		<option value="MT">Montana</option>
																		<option value="NE">Nebraska</option>
																		<option value="NV">Nevada</option>
																		<option value="NH">New Hampshire</option>
																		<option value="NJ">New Jersey</option>
																		<option value="NM">New Mexico</option>
																		<option value="NY">New York</option>
																		<option value="NC">North Carolina</option>
																		<option value="ND">North Dakota</option>
																		<option value="OH">Ohio</option>
																		<option value="OK">Oklahoma</option>
																		<option value="OR">Oregon</option>
																		<option value="PA">Pennsylvania</option>
																		<option value="RI">Rhode Island</option>
																		<option value="SC">South Carolina</option>
																		<option value="SD">South Dakota</option>
																		<option value="TN">Tennessee</option>
																		<option value="TX">Texas</option>
																		<option value="UT">Utah</option>
																		<option value="VT">Vermont</option>
																		<option value="VA">Virginia</option>
																		<option value="WA">Washington</option>
																		<option value="WV">West Virginia</option>
																		<option value="WI">Wisconsin</option>
																		<option value="WY">Wyoming</option>
																	</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 200px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-state-container"><span class="select2-selection__rendered" id="select2-state-container"><span class="select2-selection__placeholder">Click to Choose...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Platform</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<select class="input-medium" id="platform" name="platform">
																			<option value="">------------------</option>
																			<option value="linux">Linux</option>
																			<option value="windows">Windows</option>
																			<option value="mac">Mac OS</option>
																			<option value="ios">iOS</option>
																			<option value="android">Android</option>
																		</select>
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Comment</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<textarea class="input-xlarge" name="comment" id="comment"></textarea>
																	</div>
																</div>
															</div>

															<div class="space-8"></div>

															<div class="form-group">
																<div class="col-xs-12 col-sm-4 col-sm-offset-3">
																	<label>
																		<input name="agree" id="agree" class="ace" type="checkbox">
																		<span class="lbl"> I accept the policy</span>
																	</label>
																</div>
															</div>
														</form>
													</div>

													<div class="step-pane" data-step="2">
														<div>
															<div class="alert alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-check"></i>
																	Well done!
																</strong>

																You successfully read this important alert message.
																<br>
															</div>

															<div class="alert alert-danger">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-times"></i>
																	Oh snap!
																</strong>

																Change a few things up and try submitting again.
																<br>
															</div>

															<div class="alert alert-warning">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<strong>Warning!</strong>

																Best check yo self, you're not looking too good.
																<br>
															</div>

															<div class="alert alert-info">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<strong>Heads up!</strong>

																This alert needs your attention, but it's not super important.
																<br>
															</div>
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
													</div>
												</div>
											</div>

											<hr>
											<div class="wizard-actions">
												<button class="btn btn-prev" disabled="disabled">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

												<button class="btn btn-success btn-next" data-last="Finish">
													Next
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								