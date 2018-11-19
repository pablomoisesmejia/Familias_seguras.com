<form method='post' enctype='multipart/form-data' autocomplete="off">
    <div class='row'>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>note_add</i>
          	<input id='nombre' type='text' name='nombre' class='validate' value='<?php print($producto->getNombre()) ?>' required/>
          	<label for='nombre'>Nombre</label>
        </div>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>description</i>
          	<input id='descripcion' type='text' name='descripcion' class='validate' value='<?php print($producto->getDescripcion()) ?>' required/>
          	<label for='descripcion'>Descripción</label>
        </div>
        <div class='input-field col s12 m6'>
          	<i class="material-icons prefix">monetization_on</i>
          	<input id='precio' type='number' name='precio' class='validate' max='999.99' min='0.01' step='any' value='<?php print($producto->getPrecio()) ?>' required/>
          	<label for='precio'>Precio ($)</label>
        </div>
        <div class='input-field col s12 m6'>
            <?php
            Page::showSelect("Categoría", "categoria", $producto->getCategoria(), $producto->getCategorias());
            ?>
        </div>

        <div class='input-field col s12 m6'>
            <?php
            Page::showSelect("Marca", "marca", $producto->getMarca(), $producto->getMarcas());
            ?>
        </div>
        <div class='input-field col s12 m6'>
            <?php
            Page::showSelect("Proveedor", "proveedor", $producto->getProveedor(), $producto->getProveedores());
            ?>
        </div>
      	<div class='file-field input-field col s12 m6'>
            <div class='btn waves-effect'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo' required/>
            </div>
            <div class='file-path-wrapper'>
                <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
            </div>
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
    <div class='row right'>
       

        <a href="index.php" data-tooltip='Cancelar' class="waves-effect waves-light btn  # ef5350 red aligera-2"><i class=" material-icons">cancel</i></a>
        <button type='submit'  name='crear' data-tooltip='Crear' class=" waves-effect waves-light btn # 66bb6a green aligera-2 tooltipped"><i class=" material-icons">check_circle</i></button>
    </div>
</form>