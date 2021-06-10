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
          <img src="peliculas/1.1.jpg" class="d-block w-100" alt="..." height="480px">
          <div class="carousel-caption d-none d-md-block">
            <h5>GODZILLA VS KONG</h5>
            <p>El planeta está conmovido por el enfrentamiento de dos gigantes: Godzilla y Kong.
                 Que son dos de las criaturas más poderosas, entre todas las que existen.
                  Y su pelea pone en vilo a toda la humanidad</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="peliculas/1.2.jpg" class="d-block w-100" alt="..." height="480px">
          <div class="carousel-caption d-none d-md-block">
            <h5>Raya y el último dragon</h5>
            <p>Raya, una niña de gran espíritu aventurero, se embarca en la búsqueda del último dragón del mundo con el objetivo de devolver el equilibrio a Kumandra, un lejano y recóndito territorio habitado por una civilización milenaria.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="peliculas/1.3.jpg" class="d-block w-100" alt="..." height="480px">
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


<!--COMIENZO DE CONTENIDO-->
<section class="contenedor">
  <div class="container-fluid">
      <div class="row">
          <div class="col text-uppercase"> 
              <h4 style="color: white;">Inicio</h4> </small>
          </div>
      </div>

      <div class="cont row pt-4"> 
        
        @foreach ($dats as $dat)
      
        <div class="col-12 col-md-6 col-lg-3  mb-4">
          <div class="card" style="width:300px; position:relative; overflow:hidden;">
              <img src="{{asset('img/'.$dat->Urlimagen)}}" class="card-img-top" alt="..." style="height: 300px; ">
              <div class="d-p-4 capa" style="padding:0px;">
                <h3 class="d-none d-md-block">{{$dat->Titulo}}</h3>
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
      
    </section>
       
      </div>
  </div>
  <div class="container-fluid content">
    <h5 style="color:white;">Recomendaciones</h5>
    <div class="row">
          <div class="col-12 col-md-6 col-lg-3  mb-4">
            <div class="card fondo" style="width:260px; position:relative; overflow:hidden;">
                <img src="peliculas/d.jpg" class="card-img-top" alt="..." style="height: 290px; ">
                <div class="d-p-4 capa" style="padding:0px;">
                  <h3 class="d-none d-md-block">Disomnia</h3>
                  <p class="d-none d-md-block">Tras un suceso global repentino que acaba con todos los dispositivos electrónicos</p>
                 <p class="d-none d-md-block">Actores: Alex House</p>
                  <p class="d-none d-md-block">Genero: Acción</p>
                  <a href="" type="button" class="btn btn-outline-success">PLAY</a>
                  
              </div>
                <div class="card-body text-center" style="padding:0px;">
                  <p class="card-title">Disomnia</p>
                </div>
              </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3  mb-4">
          <div class="card fondo" style="width:260px; position:relative; overflow:hidden;">
              <img src="peliculas/cop.jpg" class="card-img-top" alt="..." style="height: 290px; ">
              <div class="d-p-4 capa" style="padding:0px;">
                <h3 class="d-none d-md-block">COPS</h3>
                <p class="d-none d-md-block">Christoph entrena con la unidad especial de la policía vienesa WEGA, una vida diaria de testosterona.</p>
               <p class="d-none d-md-block">Actores: Anna Suk</p>
                <p class="d-none d-md-block">Genero: Drama</p>
                <a href="" type="button" class="btn btn-outline-success">PLAY</a>
                
            </div>
              <div class="card-body text-center" style="padding:0px;">
                <p class="card-title">COPS</p>
              </div>
            </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3  mb-4">
        <div class="card fondo" style="width:260px; position:relative; overflow:hidden;">
            <img src="peliculas/fat.jpg" class="card-img-top" alt="..." style="height: 290px; ">
            <div class="d-p-4 capa" style="padding:0px;">
              <h3 class="d-none d-md-block">Matar a santa</h3>
              <p class="d-none d-md-block">Santa Claus debe enfrentarse a un sicario enviado por un niño decepcionado.</p>
             <p class="d-none d-md-block">Actores: Alexa Devine</p>
              <p class="d-none d-md-block">Genero: Acción</p>
              <a href="" type="button" class="btn btn-outline-success">PLAY</a>
              
          </div>
            <div class="card-body text-center" style="padding:0px;">
              <p class="card-title">Matar a santa</p>
            </div>
          </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3  mb-4">
      <div class="card fondo" style="width:260px; position:relative; overflow:hidden;">
          <img src="peliculas/h.jpg" class="card-img-top" alt="..." style="height: 290px; ">
          <div class="d-p-4 capa" style="padding:0px;">
            <h3 class="d-none d-md-block">Holly start</h3>
            <p class="d-none d-md-block">La joven Sloan regresa a casa por Navidad y se verá envuelta en una misteriosa «caza del tesoro» junto a su mejor amigo</p>
           <p class="d-none d-md-block">Actores: Brian Muller</p>
            <p class="d-none d-md-block">Genero: Comedia</p>
            <a href="" type="button" class="btn btn-outline-success">PLAY</a>
            
        </div>
          <div class="card-body text-center" style="padding:0px;">
            <p class="card-title">Holly start</p>
          </div>
        </div>
  </div>


      </div> 

  </div>


<!--FIN DE CONTENIDO-->
@endsection