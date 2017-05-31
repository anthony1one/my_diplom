@extends('layouts.admin')

@section('title', 'Добавить альбом')

@section('content')
	
<h1 align="center"><b>Добавить фотографии</b></h1>
<hr>
@foreach ($errors->all() as $message)
    <li class="error-msg">{{ $message }}</li>
@endforeach

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route' => 'albums_category.store', 'enctype' => 'multipart/form-data']) !!}
			@foreach ($errors->all() as $message)
                <li class="error-msg">{{ $message }}</li>
            @endforeach

            <div class="form-group">
            	{{ Form::label('name', 'Название: ') }}
            	{{ Form::text('name', null, ['required', 'autofocus', 'class' => 'form-control']) }}
            </div>

            <div class="form-group">
				{{ Form::label('slug', 'Slug: ') }}
				{{ Form::text('slug', null, ['required', 'class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('image', 'Главное изображение: ') }}
				{{ Form::file('image', ['required' => 'required']) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Добавить', ['class' => 'btn btn-success btn-block']) }}
			</div>
		{!! Form::close() !!}
	</div>
</div>

@endsection