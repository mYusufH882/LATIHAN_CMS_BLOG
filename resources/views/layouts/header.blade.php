<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('dashboard')}}">{{env('APP_NAME', 'CMS')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{Route::is('/') ? 'active' : ''}}" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('artikel.*') ? 'active' : ''}}" href="{{route('artikel.index')}}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('kategori.*') ? 'active' : ''}}" href="{{route('kategori.index')}}">Kategori</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item dropdown dropstart">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{auth()->user()->email}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="dropdown-item">Logout</a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>