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
		<a href="{{ url('becas/cerate-ayudantia') }}" class="btn bnt-default" >Nuevo</a>
	</div>
	<br>
	@include('becas.partials.ayudantia-list')
@endsection
