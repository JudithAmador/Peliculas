<form action="{{url('/admin/'.$dat->id)}}" method="POST" class="d-inline-block">
    {{@method_field('DELETE')}}
    {{ csrf_field() }} 
    <input type="submit" class="btn btn-danger" style="color: white" value="Eliminar">

</form>