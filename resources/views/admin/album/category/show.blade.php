@extends('layouts.admin')

@section('title', $album->name)

@section('content')
	<div class="text-center">
		@if(Session::has('message'))
		    <div class="alert alert-success">
		        {{ Session::get('message') }}
		    </div>
		@endif
		<h1><b>{{ $album->name }}</b></h1>
		<div>
			<a href="{{ route('albums.index') }}" class="btn btn-success">Назад</a> 
			<a href="{{ route('albums.create') }}" class="btn btn-success">Добавить фотографии</a>
			<a href="{{ route('albums_category.edit', $album->id) }}" class="btn btn-success">Редактировать альбом</a>
			<a href="#" class="btn btn-success btn-edit">Удалить фотографии</a>
		</div>
	</div>
	<hr>
	<div class="row" style="margin: 30px;">
		@foreach($album['images'] as $image)
			<div class="col-md-4 col-sm-4" style="margin-top: 30px;">
				<a href="{{ URL::asset($image['src_img']) }}" data-lightbox="album">
					<img src="{{ URL::asset($image['src_img']) }}" width="100%" height="100%" class="img-responsive">
				</a>
				<a href="{{ route('albums.deleteImg', $image->id) }}" class="btn btn-danger btn-delete">Удалить</a>
			</div>
		@endforeach
	</div>
@endsection