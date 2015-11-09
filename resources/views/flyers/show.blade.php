@extends('layout')	
@section('content')
	<h1>{{$flyer->street}}</h1>
	<h1>{{$flyer->price}}</h1>
	<hr>
	<div class="col-md-6">
		<div class="description">
			{!! nl2br($flyer->description) !!}
		</div>
		<form id="addPhotoForm" action="/{{$flyer->zip}}/{{$flyer->street}}/photos" method="POST" class="dropzone">
			{{csrf_field()}}
		</form>
	</div>
	<div class="col-md-6">
		@foreach($flyer->photos  as $photo)
			<img src="/{{$photo->path}}" alt="">
		@endforeach
	</div>
@endsection
@section('scripts.footer')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
	<script>
		Dropzone.options.addPhotoForm({
			paramName: 'photo',
			maxFilesize : 3,
			acceptedFiles: '.jpg, .jpeg, .png, .bmp'
		});
	</script>
	
@endsection