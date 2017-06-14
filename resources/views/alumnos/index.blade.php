@extends('layouts.app')
@section('content')
	<div>
		<a href="{{ url()->previous() }}" class="btn bnt-default" >Atras</a>
		<a href="{{ route('alumnos.create') }}" class="btn bnt-default" >Nuevo</a>
	</div>
	@include('alumnos.partials.table-list')
@endsection