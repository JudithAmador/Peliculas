<div class="container"  style="color: white; ">
    <div class="row">
        <div class="col text-center">
            
            <h2>Registra nuevo contenido</h2>
        </div>
    </div>
    <div class="form-group "> 
            <input type="text" class="form-control" name="titulo"  placeholder="TITULO">
    </div>
    
    
   
    <div class="form-group"> 
        <input type="text" class="form-control" name="actores" placeholder="ACTORES">
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Selecciona categoria</label>
        <select class="form-control" id="exampleFormControlSelect1" name="genero">
          <option>Pelicula</option>
          <option>Serie</option>
          <option>Romance</option>
          <option>Accion</option>
          <option>Drama</option>
        </select>
      </div>
    
   
    <div class="form-group" > 
      
        <input type="text" class="form-control" name="descripcion" placeholder="Agregar descripción">
    </div>
    <div class="form-group"> 
    <label for="exampleFormControlFile1">Selecciona una imagen</label>
   
    <input type="file" class="form-control-file" id="exampleFormControlFile1"  name="foto">
    </div>
    <div class="form-group"> 
        <input type="text" class="form-control" placeholder="Enlace"  name="enlace">
    </div>
    

    <button type="submit" class="btn btn-primary">
        Guardar
    </button>


   </div>