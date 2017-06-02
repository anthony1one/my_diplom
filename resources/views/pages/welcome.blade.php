@extends('layouts.main')

@section('title', 'Главная')

@section('carousel')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/img/1.jpg" style="width: 100%; height: 100%;" alt="...">
        </div>
        <div class="item">
            <img src="/img/2.jpg" style="width: 100%; height: 100%;" alt="...">
        </div>
        <div class="item">
            <img src="/img/3.jpg" style="width: 100%; height: 100%;" alt="...">
        </div>
        <div class="item">
            <img src="/img/4.jpg" style="width: 100%; height: 100%;" alt="...">
        </div>
        <div class="item">
            <img src="/img/5.jpg" style="width: 100%; height: 100%;" alt="...">
        </div>
        <div class="item">
            <img src="/img/6.jpg" style="width: 100%; height: 100%;" alt="...">
        </div>
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

@endsection

@section('content')
	<div class="text-center" style="margin: 200px 0 100px 0;">
		<h1><b>Сайт фотографа Ксении Барковой</b></h1><br>
		<div style="font-size: 20px; color: gray; margin-bottom: 80px;">
            <a href="{{ route('portfolio') }}" class="welcome-nav"><small>Портфолио</small></a> |
    		<a href="{{ route('about') }}" class="welcome-nav"><small>Обо мне</small></a> |
            <a href="{{ route('albums') }}" class="welcome-nav"><small>Альбом</small></a> |
            {{-- <a href="{{ route('shop') }}" class="welcome-nav"><small>Магазин</small></a> | --}}
            <a href="{{ route('contacts') }}" class="welcome-nav"><small>Контакты</small></a> 
		</div>
        <a href="{{ route('contacts') }}" class="btn btn-primary btn-lg">Написать мне</a>
	</div>
@endsection