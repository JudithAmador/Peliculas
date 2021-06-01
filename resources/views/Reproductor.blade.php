@extends('main')
@section('content')
<form action="{{Url('/Play'.$dat->id)}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    {{@method_field('PATCH')}}
    <!--COMIENZO DE CONTENIDO-->
<section class="mt-4">
    <div class="container-fluid">
  
        <div class="row"> 
          
          <div class="cont col-12 col-md-6 col-lg-3 ml-lg-5">
            <div class="card" style="width:250px;">
                <img src="{{asset('img/'.$dat->Urlimagen)}}" class="card-img-top" alt="..." style="height: 300px; ">
              </div>
        </div>
        <div>


        </div class="col-12 col-md-12 col-lg-9">
          <h1>{{$dat->Titulo}}</h1><br>
        </div>
    </div>
    <div class=" row">
      
        <div class="repro card">
            <div class="card-body">
              <h5 class="card-title"></h5>
            </div>
            <iframe class="embed-responsive-item" src="{{asset($dat->UrlPelicula)}}" width="100%" height="500" allowfullscreen></iframe>
          </div>       
    </div>

    </div>
</div>
  </section>
  <!--FIN DE CONTENIDO-->
</form>
@endsection