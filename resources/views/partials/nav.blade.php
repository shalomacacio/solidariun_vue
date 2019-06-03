  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index')}}">{{ config('app.name', 'Solidariun') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <a class="nav-link" href="{{ route('index')}}">Cadastre-se
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index')}}">Criar Campanha</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
