<form action="{{url('/admin/'.$dat->id)}}" method="POST">
    {{@method_field('DELETE')}}
    {{ csrf_field() }} 
    <input type="submit" class="btn btn-link" style="color: red" value="Eliminar">

</form>