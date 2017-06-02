<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse2" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('admin.index') }}">Меню Администратора</a>
    </div>
    
    <div class="collapse navbar-collapse" id="bs-navbar-collapse2">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('index') }}">Основной сайт</a></li>
            <li class="{{ Request::is('admin/portfolio') ? 'active' : '' }}"><a href="{{ route('portfolio.index') }}">Портфолио</a></li>
            <li class="{{ Request::is('admin/albums') ? 'active' : '' }}"><a href="{{ route('albums.index') }}">Альбомы</a></li>
            {{-- <li class="{{ Request::is('admin/shop') ? 'active' : '' }}"><a href="{{ route('admin.shop') }}">Магазин</a></li> --}}
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Выйти
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
        <ul class="dropdown-menu">
            
        </ul>
    </div>
</nav>