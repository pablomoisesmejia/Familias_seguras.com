<form method='post' enctype='multipart/form-data' autocomplete='off'>
    <div class='row'>
        <div class='input-field col s12 m6'>
            <img src='../../../anuncios/web/img/anuncios/<?php print($producto->getImagen()) ?>' class='materialboxed' width='350' height='250'>
        </div>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>person</i>
          	<input id='nombres' type='text' name='nombres' class='validate' value='<?php print($producto->getNombre()) ?>' required/>
          	<label for='nombres'>Nombre del direcorio</label>
        </div>
        <div class='input-field col s12 m6'>
            <?php
            Page::showSelect("Categoría", "categoria", $producto->getCategoria(), $producto->getCategorias());
            ?>
        </div>
        <div class='input-field col s12 m6'>
            <?php
            Page::showSelect("Plan", "plan", $producto->getPlan(), $producto->getPlanes());
            ?>
        </div>
        <div class='col s12 m6'>
            <p>
                <div class='switch'>
                    <span>Estado:</span>
                    <label>
                        <i class='material-icons'>visibility_off</i>
                        <input type='checkbox' name='estado' <?php print($producto->getEstado()?"checked":"") ?>/>
                        <span class='lever'></span>
                        <i class='material-icons'>visibility</i>
                    </label>
                </div>
            </p>
        </div>
    </div>
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='actualizar' class='btn waves-effect blue tooltipped' data-tooltip='Actualizar'><i class='material-icons'>save</i></button>
    </div>

</form>