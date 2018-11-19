<form method='post' enctype='multipart/form-data' autocomplete="off">
    <div class='row'>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>person</i>
          	<input id='nombres' type='text' name='nombres' class='validate' value='<?php print($usuario->getNombres()) ?>' required/>
          	<label for='nombres'>Nombres</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>person</i>
            <input id='apellidos' type='text' name='apellidos' class='validate' value='<?php print($usuario->getApellidos()) ?>' required/>
            <label for='apellidos'>Apellidos</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>email</i>
            <input id='correo' type='email' name='correo' class='validate' value='<?php print($usuario->getCorreo()) ?>' required/>
            <label for='correo'>Correo</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>person_pin</i>
            <input id='alias' type='text' name='alias' class='validate' value='<?php print($usuario->getAlias()) ?>' required/>
            <label for='alias'>Alias</label>
        </div>

         <div class='input-field col s12 m6'>
        <i class="material-icons prefix">insert_invitation</i>
            <input id="fecha_nac" name="fecha_nac" type="text" value='<?php print($usuario->getFechaNac()) ?>' class="datepicker">
            <label for="fecha_nac">Fecha de nacimiento</label>
        </div>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>call_split</i>
          	<input id='direccion_admin' type='text' name='direccion_admin' class='validate' value='<?php print($usuario->getDireccion()) ?>' required/>
          	<label for='direccion_admin'>Direccion</label>
        </div>

           <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>import_contacts</i>
          	<input id='documento_admin' type='number' name='documento_admin' class='validate' value='<?php print($usuario->getDocumento()) ?>' required/>
          	<label for='documento_admin'>Documento</label>
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
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='actualizar' class='btn waves-effect blue tooltipped' data-tooltip='Actualizar'><i class='material-icons'>save</i></button>
    </div>
    <div>
        <img src='../../web/img/usuarios/<?php print($usuario->getImagen()) ?>' class='materialboxed' width='150' height='150'>
    </div>
</form>