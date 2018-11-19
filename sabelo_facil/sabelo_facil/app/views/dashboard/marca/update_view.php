<form method='post' enctype='multipart/form-data' autocomplete="off">
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>person</i>
            <input id='nombre' type='text' name='nombre' class='validate' value='<?php print($Marca->getNombre()) ?>' required/>
            <label for='nombre'>Nombre</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>email</i>
            <input id='correo' type='email' name='correo' class='validate' value='<?php print($Marca->getCorreo()) ?>' required/>
            <label for='correo'>Correo</label>
        </div>
         <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>call</i>
          	<input id='telefono' type='number' name='telefono' class='validate' value='<?php print($Marca->getTelefono()) ?>' required/>
          	<label for='telefono'>Telefono</label>
        </div>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>call_split</i>
          	<input id='direccion_admin' type='text' name='direccion_admin' class='validate' value='<?php print($Marca->getDireccion()) ?>' required/>
          	<label for='direccion_admin'>Direccion</label>
        </div>
        <div class='file-field input-field col s12 m6'>
            <div class='btn waves-effect'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo'/>
            </div>
            <div class='file-path-wrapper'>
                <input class='file-path validate' type='text' placeholder='Seleccione una imagen'/>
            </div>
        </div>
        <div class='switch'>
                    <span>Estado:</span>
                    <label>
                        <i class='material-icons'>visibility_off</i>
                        <input type='checkbox' name='estado' <?php print($Marca->getEstado()?"checked":"") ?>/>
                        <span class='lever'></span>
                        <i class='material-icons'>visibility</i>
                    </label>
        </div>
           
            
    </div>
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='actualizar' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
    </div>
    <div>
         <img src='../../web/img/marcas/<?php print($Marca->getImagen()) ?>' class='materialboxed' width='150' height='150'> 
    </div>
        </form>