<form method='post' enctype='multipart/form-data' autocomplete="off">
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>note_add</i>
            <input id='nombre' type='text' name='nombre' class='validate' value='<?php print($Materia->getNombre()) ?>' required/>
            <label for='nombre'>Nombre</label>
        </div>
         <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>note_add</i>
            <input id='descripcion' type='text' name='descripcion' class='validate' value='<?php print($Materia->getDescripcion()) ?>' required/>
            <label for='descripcion'>Nombre</label>
        </div>
        <div class='switch'>
                    <span>Estado:</span>
                    <label>
                        <i class='material-icons'>visibility_off</i>
                        <input type='checkbox' name='estado' <?php print($Materia->getEstado()?"checked":"") ?>/>
                        <span class='lever'></span>
                        <i class='material-icons'>visibility</i>
                    </label>
        </div>
    </div>
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='actualizar' class='btn waves-effect blue tooltipped' data-tooltip='Actualizar'><i class='material-icons'>save</i></button>
    </div>
</form>