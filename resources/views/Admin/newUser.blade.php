@extends ('base')

@section ('title')
	add {{ $type }}
@endsection

@section ('style')
	<link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection
@section ('content')
	@include ('header')
	@include ('Admin.addForm')
	@include ('errors.valuesRequire')
@endsection