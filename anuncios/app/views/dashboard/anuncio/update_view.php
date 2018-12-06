<form method='post' enctype='multipart/form-data'>
<div class='row'>

<div class='file-field input-field col s12 m6'>
        <div class='btn waves-effect'>
            <span><i class='material-icons'>image</i></span>
            <input type='file' name='archivo' required/>
        </div>
        <div class='file-path-wrapper'>
            <input type='text' class='file-path validate' placeholder='Selecciona imagen del anuncio'/>
        </div>
    </div>
    <div class='input-field col s12 m6'>
        <i class='material-icons prefix'>note_add</i>
        <input id='nombre' type='text' name='nombre' class='validate' value='' required/>
        <label for='nombre'>Intervalo de Anuncio</label>
    </div>
    <div class='input-field col s12 m6'>
        <i class='material-icons prefix'>note_add</i>
        <input id='nombre' type='number' name='nombre' class='validate' value='' required/>
        <label for='nombre'>Cantidas intervalo fecha</label>
    </div>
    <div class=''>
    <div class='input-field col s6 '>
      <i style="color:black;"class="material-icons prefix">event</i>
      <input  type="text" class="datepicker" id="fecha_naci_vida" required/>
      <label class="" for="fecha_naci_vida">Fecha de inicio</label>
    </div>
  </div>
  <div class=''>
    <div class='input-field col s6 '>
      <i style="color:black;"class="material-icons prefix">event</i>
      <input  type="text" class="datepicker" id="fecha_naci_vida" required/>
      <label class="" for="fecha_naci_vida">Fecha de Finalización</label>
    </div>
  </div>
  <div class=''>
    <div class='input-field col s6 '>
      <i style="color:black;"class="material-icons prefix"></i>
      <input  type="text" class="" id="fecha_naci_vida" required/>
      <label class="" for="fecha_naci_vida">Estado</label>
    </div>
  </div>
  <div class=''>
    <div class='input-field col s6 '>
      <i style="color:black;"class="material-icons prefix">mail</i>
      <input  type="text" class="datepicker" id="fecha_naci_vida" required/>
      <label class="" for="fecha_naci_vida">Día Especifico</label>
    </div>
  </div>
</div>
<div class='row center-align'>
    <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
    <button type='submit' name='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
</div>
</form>