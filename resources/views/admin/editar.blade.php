@extends('layouts.app')

@section('content')
<form action="{{Url('/admin'.$dat->id)}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    {{@method_field('PATCH')}}}
    @include('admin.unir');
    <!--COMIENZO DE CONTENIDO-->
  <!--FIN DE CONTENIDO-->
</form>

@endsection