@extends('layouts.admin')

@section('title', 'Создать портфолио')

@section('content')
	<div class="text-center">
		<h1><b>Добавить фотографии</b></h1>
		{{-- <a href="{{ route('portfolio.index') }}" class="btn btn-warning">Назад</a> --}}
		<hr>
		@foreach ($errors->all() as $message)
            <li class="error-msg">{{ $message }}</li>
        @endforeach

        <div class="row">
        	<div class="col-md-4 col-md-offset-4">
        		{!! Form::open(['route' => 'portfolio.store', 'enctype' => 'multipart/form-data']) !!}
					<div class="form-group">
						{{ Form::file('images[]', ['multiple' => true, 'required' => 'required']) }}
					</div>
					<div class="form-group">
						{{ Form::submit('Добавить', ['class' => 'btn btn-success btn-block']) }}
					</div>
				{!! Form::close() !!}
        	</div>
        </div>
	</div>
@endsection