@extends('layouts.main')

@section('title', 'Альбомы')

@section('content')
<div class="row" style="margin: 30px;">
    @foreach($albums as $album)
        <div class="col-md-4 col-sm-4" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('album_single', $album->slug) }}">
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