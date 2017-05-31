@extends('layouts.admin')

@section('title', 'Портфолио')

@section('content')
<div class="text-center">
	@if(Session::has('message'))
	    <div class="alert alert-success">
	        {{ Session::get('message') }}
	    </div>
	@endif
	<h1><b>Портфолио</b></h1>
	<div>
		<a href="{{ route('portfolio.create') }}" class="btn btn-success">Добавить фотографии</a> 
		<a href="#" class="btn btn-success btn-edit">Редактировать фотографии</a>
	</div>
</div>
<hr>
<div class="row" style="margin: 30px;">
	@foreach($portfolios as $portfolio)
		<div class="col-md-4 col-sm-4" style="margin-top: 30px;">
			<a href="{{ URL::asset($portfolio['src_img']) }}" data-lightbox="portfolio">
				<img src="{{ URL::asset($portfolio['src_img']) }}" width="100%" height="100%" class="img-responsive">
			</a>
			<a href="{{ route('portfolio.deleteImg', $portfolio->id) }}" class="btn btn-danger btn-delete">Удалить</a>
		</div>
	@endforeach
</div>
@endsection