@extends('layouts.app')
@section('link')
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.min.css') }}" />
@endsection

@section('content')
	@include('alumnos.partials.form-create')
@endsection

@section('script')
	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('js/jquery-additional-methods.min.js') }}"></script>
	<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
	<script type="text/javascript">
	
		$.mask.definitions['~']='[+-]';
		$('#telefono').mask('(9999) 999-9999');
		$('#cedula').mask('99-999-999');
		// $('.date-picker').datepicker({
		// 	autoclose: true,
		// 	todayHighlight: true
		// });
		//$('.date-picker').mask('12/12/2000');
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