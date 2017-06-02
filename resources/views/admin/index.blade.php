@extends('layouts.admin')

@section('title', 'Панель Администратора')

@section('content')
	<div class="text-center">
		<h1><b>Меню Администратора</b></h1>

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div style="margin-top: 50px;">
					<a href="{{ route('portfolio.index') }}" class="btn btn-success btn-block" style="margin-bottom: 40px;">Портфолио</a>
					<a href="{{ route('albums.index') }}" class="btn btn-success btn-block" style="margin-bottom: 40px;">Альбомы</a>
					{{-- <a href="{{ route('admin.shop') }}" class="btn btn-success btn-block" style="margin-bottom: 40px;">Магазин</a> --}}
				</div>	
			</div>
		</div>
	</div>
@endsection