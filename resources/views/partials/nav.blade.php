<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('inicio') }}">Peliculas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('peliculas.index') }}">Listado Peliculas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('peliculas.create') }}" >Dar de alta Pelicula</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >Editar Pelicula</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >Busqueda de Peliculas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >API</a>
        </li>
      </ul>
    </div>
  </div>
</nav>