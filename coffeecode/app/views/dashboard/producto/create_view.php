<form method='post' enctype='multipart/form-data'>
    <div class='row'>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>note_add</i>
          	<input id='nombre' type='text' name='nombre' class='validate' value='<?php print($producto->getNombre()) ?>' required/>
          	<label for='nombre'>Nombre</label>
        </div>

        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>description</i>
          	<input id='descripcion' type='text' name='descripcion' class='validate' value='<?php print($producto->getDireccion()) ?>' required/>
          	<label for='descripcion'>Direccion</label>
        </div>
        <div class='input-field col s12 m6'>
            <?php
            Page::showSelect("Categoría", "categoria", $producto->getCategoria(), $producto->getCategorias());
            ?>
        </div>
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
    </div>
</form>