@extends('layouts.app')
@section('content')
@if (session('mensaje'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>
        {{ session('mensaje') }}
    </div>
@endif
	<div>
		<a href="{{ url()->previous() }}" class="btn bnt-default" >Atras</a>
	</div>
	<br>
	@include('becas.partials.form-ayudantia')
@endsection

@section('script')
	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('js/jquery-additional-methods.min.js') }}"></script>
	<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
	<script type="text/javascript">
	
		
		$('form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						nombre:{
							required: true,
						},
						apellido:{
							required: true,
						},
						cedula:{
							required: true,
						},
						fache_nac:{
							required: true,
						},
						direccion:{
							required: true,
						},
						telefono:{
							required: true,
						},
						email:{
							required: true,
						},
						banco:{
							required: true,
						},
						nro_cuenta:{
							required: true,
						},
						'representante[nombre]':{
							required: true,
						},
						'representante[apellido]':{
							required: true,
						},
						'representante[cedula]':{
							required: true,
						},
						'representante[fache_nac]':{
							required: true,
						},
						'representante[direccion]':{
							required: true,
						},
						'representante[telefono]':{
							required: true,
						},
					},
			
					messages: {
						nombre:{
							required: 'es requerido',
						},
						apellido:{
							required: 'es requerido',
						},
						cedula:{
							required: 'es requerido',
						},
						fache_nac:{
							required: 'es requerido',
						},
						direccion:{
							required: 'es requerido',
						},
						telefono:{
							required: 'es requerido',
						},
						email:{
							required: 'es requerido',
						},
						banco:{
							required: 'es requerido',
						},
						nro_cuenta:{
							required: 'es requerido',
						},
						'representante[nombre]':{
							required: 'es requerido',
						},
						'representante[apellido]':{
							required: 'es requerido',
						},
						'representante[cedula]':{
							required: 'es requerido',
						},
						'representante[fache_nac]':{
							required: 'es requerido',
						},
						'representante[direccion]':{
							required: 'es requerido',
						},
						'representante[telefono]':{
							required: 'es requerido',
						},
					},
				});
	</script>
@endsection

