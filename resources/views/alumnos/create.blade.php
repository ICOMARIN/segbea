@extends('layouts.app')
@section('content')
	<div>
		<a href="{{ url()->previous() }}" class="btn bnt-default" >Atras</a>
		
	</div><br>
	@include('alumnos.partials.form-create')
@endsection