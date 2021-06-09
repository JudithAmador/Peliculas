<!--header-->
<nav class="navbar navbar-expand-lg navbar-light" id="header" background-color:#2A0A29>
    <a class="navbar-brand text-light" href="{{url('/')}}">AnnMovies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('buscar.pelicula', 'Pelicula')}}">Peliculas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('consultar.serie', 'Serie')}}">Series</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Generos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('consultar.romance', 'Romance')}}">Romace</a>
            <a class="dropdown-item" href="{{route('consultar.accion', 'Accion')}}">Acción</a>
            <a class="dropdown-item" href="{{route('consultar.drama', 'Drama')}}">Drama</a>
        </li>
      
      </ul>
      <form class="form-inline my-2 my-lg-0" action="">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Buscar pelicula" value="" aria-label="Search">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
    </nav>
    <!--/header-->
      
 

