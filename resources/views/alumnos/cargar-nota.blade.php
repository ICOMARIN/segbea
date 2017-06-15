@extends('layouts.app')
@section('link')
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.min.css') }}" />
@endsection
@section('content')
	<div>
		<a href="{{ url()->previous() }}" class="btn bnt-default" >Atras</a>
		{{-- <a href="{{ route('alumnos.create') }}" class="btn bnt-default" >Nuevo</a> --}}
	</div>
	@include('alumnos.partials.form-cargar-nota')
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
						nota:{
							required: true,
						},
						lapso:{
							required: true,
						},
						
					},
			
					messages: {
						nota:{
							required: 'es requerido',
						},
						lapso:{
							required: 'es requerido',
						},
					},
				});
	</script>
@endsection