@extends('layouts.admin')

@section('title', 'Добавить фотографии')

@section('content')
	
<h1 align="center"><b>Добавить фотографии</b></h1>
<hr>
@foreach ($errors->all() as $message)
    <li class="error-msg">{{ $message }}</li>
@endforeach

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(['route' => 'albums.store', 'enctype' => 'multipart/form-data']) !!}
			@foreach ($errors->all() as $message)
                <li class="error-msg">{{ $message }}</li>
            @endforeach

			<div class="form-group">
				{{ Form::file('images[]', ['multiple' => true, 'required' => 'required']) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Добавить', ['class' => 'btn btn-success btn-block']) }}
			</div>
		{!! Form::close() !!}
	</div>
</div>

@endsection