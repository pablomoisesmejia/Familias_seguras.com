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
            <?php
            Page::showSelect("Entervalo de fecha", "intervalo", $banner->getIdIntervaloFecha(), $banner->getIntervalosFecha());
            ?>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>note_add</i>
            <input id='cant_intervalo' type='number' name='cant_intervalo' class='validate' value='1' required/>
            <label for='cant_intervalo'>Cantidas intervalo fecha</label>
        </div>
        <div class=''>
          <div class='input-field col s6 '>
            <i style="color:black;"class="material-icons prefix">event</i>
            <input  type="text" class="datepicker" id="fecha_inicio" name="fecha_inicio" required/>
            <label class="" for="fecha_inicio">Fecha de inicio</label>
          </div>
        </div>
        <div class='input-field col s6 '>
          <i style="color:black;"class="material-icons prefix">event</i>
          <input  type="text" class="timepicker" id="hora_inicio" name="hora_inicio" required/>
          <label class="" for="hora_inicio">Hora de inicio</label>
        </div>
    </div>
    <div class='row center-align'>
        <a href='../account/index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
    </div>
</form>