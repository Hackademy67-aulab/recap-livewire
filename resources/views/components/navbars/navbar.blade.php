<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homePage')}}">RecapH67</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('createAlbum')}}">Crea Album</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('indexAlbum')}}">Tutti gli album</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Registrazione
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @guest
                <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              @else
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
              @endguest
            </ul>
          </li>

        </ul>

        @auth
          Ciao, {{Auth::user()->name}}
        @else
          Ciao, accedi!
        @endauth

      </div>
    </div>
</nav>