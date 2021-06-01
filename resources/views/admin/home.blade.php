@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading ">
                    
                    <a href="{{url('/admin/create')}}" class="btn btn-success">Registrar nuevo contenido</a>
                </div>
                
            </div>
        </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                 
                </div>
                <div class="row">
                        <div class="col-12 col-md-offset" >
                            <table class="table">
                               <thead class="encabeado">
                                <th>Codigo</th>
                                <th>Titulo</th>
                                <th>Genero</th>
                                <th>Actores</th> 
                                <th>Descripcion</th>
                                <th>Imagen</th>
                                <th>Enlace</th>  
                                <th>Acción</th> 
                                      
                            </thead> 
                            <tbody class="cuerpo">
                             @foreach ($dats as $dat)
                                <tr>
                                    <td>{{$dat->id}}</td>
                                    <td>{{$dat->Titulo}}</td>
                                    <td>{{$dat->Genero}}</td>
                                    <td>{{$dat->Actores}}</td>
                                    <td>{{$dat->Descripcion}}</td>
                                    <td>{{$dat->Urlimagen}}</td>
                                    <td>{{$dat->UrlPelicula}}</td>
                                    <td>@include('admin.eliminar', ['$dat'=>$dat])
                                        <a href="{{url('/admin/'.$dat->id.'/edit')}}" class="btn btn-primary">Editar</button>
                                        
                                        </td>
                                            
                                </tr>
                            @endforeach
                            
                            </tbody>   
                            </table> 

                        </div>

                </div>
      
    </div>

@endsection
