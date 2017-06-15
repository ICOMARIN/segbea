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
		<a href="{{ route('alumnos.create') }}" class="btn bnt-default" >Nuevo</a>
	</div>
	@include('alumnos.partials.table-list')
@endsection
