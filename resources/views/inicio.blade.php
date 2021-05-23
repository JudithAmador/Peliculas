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
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="peliculas/1.3.jpg" class="d-block w-100" alt="..." height="480px">
            <div class="carousel-caption d-none d-md-block">
              <h5>Sonic</h5>
              <p>Some representative placeholder content for the third slide.</p>
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
@endsection