<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{env('APP_NAME', 'CMS')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Artikel</a>
          </li> --}}
        </ul>
      </div>
      <span class="navbar-text">
        <a href="{{route('login')}}" class="btn btn-md btn-outline-primary">
          Login
        </a>
      </span>
    </div>
  </nav>