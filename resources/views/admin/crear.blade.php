@extends('layouts.app')

@section('content')

<!-- Registrar contenido -->
<form action="{{route('admin.store')}}" method="post" accept="image/*" class="campos" enctype="multipart/form-data">
    {{csrf_field()}}
   @include('admin.unir');
</form>


  






<!-- /Registrar contenido -->
@endsection