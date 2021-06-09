@extends('main')
@section('content')
<!--CAROUSEL-->
<main id="main">
    <div id="carousel" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/peliculas/1.1.jpg" class="d-block w-100" alt="..." height="480px">
            <div class="carousel-caption d-none d-md-block">
              <h5>GODZILLA VS KONG</h5>
              <p>El planeta está conmovido por el enfrentamiento de dos gigantes: Godzilla y Kong.
                   Que son dos de las criaturas más poderosas, entre todas las que existen.
                    Y su pelea pone en vilo a toda la humanidad</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/peliculas/1.2.jpg" class="d-block w-100" alt="..." height="480px">
            <div class="carousel-caption d-none d-md-block">
              <h5>Raya y el último dragon</h5>
              <p>Raya, una niña de gran espíritu aventurero, se embarca en la búsqueda del último dragón del mundo con el objetivo de devolver el equilibrio a Kumandra, un lejano y recóndito territorio habitado por una civilización milenaria.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/peliculas/1.3.jpg" class="d-block w-100" alt="..." height="480px">
            <div class="carousel-caption d-none d-md-block">
              <h5>Sonic</h5>
              <p>Sonic provoca un accidente casual que lo transporta de su mundo, a un pequeño pueblo en los Estados Unidos, ahí conoce a Tom Wachowski (James Marsden) quien lo ayudará a regresar a su mundo</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</main>
<!--/CAROUSEL-->

<!--CONTENIDO DE PELICULAS-->
<section class="contenedor">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-uppercase"> 
                <h4 style="color: white;">Acción</h4> </small>
            </div>
        </div>
  
        <div class="cont row pt-4"> 
          
          @foreach ($Filtro as $dat)
        
          <div class="col-12 col-md-6 col-lg-3  mb-4">
            <div class="card" style="width:300px; position:relative; overflow:hidden;">
                <img src="{{asset('img/'.$dat->Urlimagen)}}" class="card-img-top" alt="..." style="height: 300px; ">
                <div class="d-p-4 capa" style="padding:0px;">
                  <h3 class="d-none d-md-block">¡{{$dat->Titulo}}!</h3>
                  <p class="d-none d-md-block">{{$dat->Descripcion}}</p>
                 <p class="d-none d-md-block">Actores: {{$dat->Actores}}</p>
                  <p class="d-none d-md-block">Genero: {{$dat->Genero}}</p>
                  <a href="{{url('/Play/'.$dat->id.'/editReproductor')}}" type="button" class="btn btn-outline-success">PLAY</a>
                  
              </div>
                <div class="card-body text-center" style="padding:0px;">
                  <p class="card-title">{{$dat->Titulo}}</p>
                </div>
              </div>
        </div>
       @endforeach
        </div>
       
    </div>
   
  </section>
  
  <!--FIN DE CONTENIDO-->
@endsection