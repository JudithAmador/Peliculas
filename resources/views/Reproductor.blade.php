@extends('main')
@section('content')
<form action="{{Url('/Play'.$dat->id)}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    {{@method_field('PATCH')}}
    <!--COMIENZO DE CONTENIDO-->
<section class="cuerpo">
    <div class="container-fluid mt-4">
  
      <div class="card mb-3 ml-5" style="max-width: 600px;">
        <div class="row no-gutters">
          <div class="col-md-4 col-lg-4 col-6">
            <img src="{{asset('img/'.$dat->Urlimagen)}}" alt="...">
          </div>
          <div class="col-md-8 col-lg-8 col-6">
            <div class="card-body">
              
              <h5 class="card-title">{{$dat->Titulo}}</h5>
    
              <p class="card-text">{{$dat->Descripcion}}</p>
              <p class="card-text"><small class="text-muted">Actores: {{$dat->Actores}}</small></p>
              <p class="card-text"><small class="text-muted">Genero: {{$dat->Genero}}</small></p>
            </div>
            &nbsp;&nbsp;&nbsp;
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>         
          </div>
        </div>
      </div>

    </div>
    
    <div class=" row">
    
        <div class="repro card mb-5">
            <div class="card-body">
              <h5 class="card-title"></h5>
            </div>
            <iframe class="embed-responsive-item" src={{URL:: asset('img/prueba.mp4')}}  frameborder="0" width="100%" height="500" allowfullscreen></iframe>
          </div>       
    </div>

    </div>
</div>
  </section>
  <!--FIN DE CONTENIDO-->
</form>
@endsection