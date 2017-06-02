@extends('layouts.main')

@section('title', $album->name)

@section('content')
	<div class="text-center">
		<h1><b>{{ $album->name }}</b></h1>
	</div>
	<hr>
	<div class="row" style="margin: 30px;">
		@foreach($album['images'] as $image)
			<div class="col-md-4 col-sm-4" style="margin-top: 30px;">
				<a href="{{ URL::asset($image['src_img']) }}" data-lightbox="album">
					<img src="{{ URL::asset($image['src_img']) }}" width="100%" height="100%" class="img-responsive">
				</a>
			</div>
		@endforeach
	</div>
@endsection