@extends('layouts.admin')

@section('title', 'Логин')

@section('content')
<div class="row" style="margin-top: 40px;">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">Администратор сайта</div>
            <div class="panel-body">
                {{ Form::open(['route' => 'login', 'class' => 'form-horizontal']) }}
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
                        @if ($errors->has('email'))
                            <strong>{{ $errors->first('email') }}</strong>
                        @endif
                        <div class="col-md-6">
                            {!! Form::text('email', null, ['required', 'autofocus', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::label('password', 'Пароль', ['class' => 'col-md-4 control-label']) !!}
                        @if ($errors->has('password'))
                            <strong>{{ $errors->first('password') }}</strong>
                        @endif
                        <div class="col-md-6">
                            {!! Form::password('password', ['required', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            {!! Form::submit('Войти', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
