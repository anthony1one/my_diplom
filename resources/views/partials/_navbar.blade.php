<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('index') }}">Ksenia Barkova</a>
    </div>
    
    <div class="collapse navbar-collapse" id="bs-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is('portfolio') ? 'active' : '' }}"><a href="{{ route('portfolio') }}">Портфолио</a></li>
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">Обо мне</a></li>
            <li class="{{ Request::is('albums') ? 'active' : '' }}"><a href="{{ route('albums') }}">Альбомы</a></li>
            {{-- <li class="{{ Request::is('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Магазин</a></li> --}}
            <li class="{{ Request::is('contacts') ? 'active' : '' }}"><a href="{{ route('contacts') }}">Контакты</a></li>
            @if(Auth::check())
                <li><a href="{{ route('admin.index') }}">Администратор</a></li>
            @endif
        </ul>
    </div>
</nav>