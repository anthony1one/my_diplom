@extends('layouts.main')

@section('title', 'Контакты')

@section('content')
	<div class="row" style="margin: 0 30px 30px 30px;">
        <div class="col-md-4">
            <div>
                <h2>Социальные сети</h2>
                <hr>
                <a href="#" class="btn btn-default">VK</a>
                <a href="#" class="btn btn-default">Instagramm</a>
                <a href="#" class="btn btn-default">Facebook</a>
            </div>
            <div style="margin-top: 80px;">
                <h2>Рассказать мне</h2>
                <hr>
                <button class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal">Оставить голосовое сообщение</button>
            </div>
        </div>
        <div class="col-md-8">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 align="center">Написать мне</h2>
                <hr>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @else
                    {!! Form::open(['route' => 'contacts_mail', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        @foreach($errors->get('name') as $message)
                            <li class="error-msg">{{ $message }}</li>
                        @endforeach

                        {!! Form::label('name', 'Имя*:', ['class' => 'control-label col-md-2']) !!}

                        <div class="col-md-10">
                            {!! Form::text('name', null, ['required', 'autofocus', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        @foreach($errors->get('email') as $message)
                            <li class="error-msg">{{ $message }}</li>
                        @endforeach

                        {!! Form::label('email', 'Email*:', ['class' => 'control-label col-md-2']) !!}

                        <div class="col-md-10">
                            {!! Form::email('email', null, ['required', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        @foreach($errors->get('phone') as $message)
                            <li class="error-msg">{{ $message }}</li>
                        @endforeach

                        {!! Form::label('phone', 'Телефон:', ['class' => 'control-label col-md-2']) !!}

                        <div class="col-md-10">
                            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        @foreach($errors->get('message') as $message)
                            <li class="error-msg">{{ $message }}</li>
                        @endforeach

                        {!! Form::label('message', 'Письмо*:', ['class' => 'control-label col-md-2']) !!}

                        <div class="col-md-10">
                            {!! Form::textarea('message', null, ['required', 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            {!! Form::submit('Отправить', ['class'=>'btn btn-primary btn-block']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" align="center" id="myModalLabel">Расскажите мне</h4>
                </div>
                <div class="modal-body">
                    
                    @include('pages.audiomodal')

                </div>
                <div class="modal-footer">
                    <h5>Нажмите на микрофон для начала записи</h5>
                    <h5>Затем нажмите кнопку справа для отправки</h5>
                    <h5>Нажмите еще раз на диктофон для новой записи</h5>
                </div>
            </div>
        </div>
    </div>
@endsection