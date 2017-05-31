@extends('layouts.main')

@section('title', 'Портфолио')

@section('content')
<div class="row" style="margin: 30px;">
	@foreach($portfolios as $portfolio)
		<div class="col-md-4 col-sm-4" style="margin-top: 30px;">
			<a href="{{ URL::asset($portfolio['src_img']) }}" data-lightbox="portfolio">
				<img src="{{ URL::asset($portfolio['src_img']) }}" width="100%" height="100%" class="img-responsive">
			</a>
		</div>
	@endforeach
</div>
@endsection