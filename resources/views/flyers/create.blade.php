@extends('layout')

@section('content')
	<h1>Selling your Home?</h1>
	<form method="POST" action="/flyers">
		@include('flyers.form')
		@include('errors')
	</form>
@endsection