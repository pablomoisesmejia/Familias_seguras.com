<form method='post' enctype='multipart/form-data' autocomplete='off'>
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>person</i>
            <input id='nombre' type='text' name='nombre' class='validate' value='<?php print($Marca->getNombre()) ?>' required/>
            <label for='nombre'>Nombre</label>
        </div> 
        <div class='input-field col s12 m6'>
        
                <div class='input-field col s12 m6'>
                    <?php
                    Page::showSelect("Marca", "marca", $Marca->getMarca(), $Marca->getMarcas());
                    ?>
                </div>
        </div>
   
    </div>
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='actualizar' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
    </div>

        </form>