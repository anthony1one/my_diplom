@extends('layouts.admin')

@section('title', 'Альбом')

@section('content')
	<div class="text-center">
		@if(Session::has('message'))
		    <div class="alert alert-success">
		        {{ Session::get('message') }}
		    </div>
		@endif
		<h1><b>Альбомы</b></h1>
		<div>
			<a href="{{ route('albums_category.create') }}" class="btn btn-success">Добавить альбом</a> 
			<a href="#" class="btn btn-success btn-edit">Редактировать альбомы</a>
		</div>
	</div>
	<hr>
	<div class="row" style="margin: 30px;">
		@foreach($albums as $album)
            <div class="col-md-4 col-sm-4" style="padding-left: 0">
                <div class="panel panel-default">
                    <div class="panel-body">
                    	<a href="{{ route('albums_category.show', $album->slug) }}">
                    		<img src="{{ URL::asset($album['src_img']) }}" height="100%" width="100%">
                    	</a>
                    </div>
                    <div class="panel-footer text-center">
                        {{ $album->name }}
                    </div>
                </div>
            </div>
   		@endforeach
	</div>
@endsection