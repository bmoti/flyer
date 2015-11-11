@extends('layout')

@section('content')
	<h1>Selling your Home?</h1>
	<form method="post" action="/flyers">
		@include('flyers.form')
		@include('errors')
	</form>
@endsection