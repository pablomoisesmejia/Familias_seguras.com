<form method='post'enctype='multipart/form-data' autocomplete='off'>
    <div class='row'>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>person</i>
          	<input id='nombres' type='text' name='nombres' class='validate' value='<?php print($cliente->getNombres()) ?>' required/>
          	<label for='nombres'>Nombres</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>person</i>
            <input id='apellidos' type='text' name='apellidos' class='validate' value='<?php print($cliente->getApellidos()) ?>' required/>
            <label for='apellidos'>Apellidos</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>email</i>
            <input id='correo' type='email' name='correo' class='validate' value='<?php print($cliente->getCorreo()) ?>' required/>
            <label for='correo'>Correo</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>person_pin</i>
            <input id='alias' type='text' name='alias' class='validate' value='<?php print($cliente->getAlias()) ?>' required/>
            <label for='alias'>Alias</label>
        </div>

         <div class='input-field col s12 m6'>
        <i class="material-icons prefix">insert_invitation</i>
            <input id="fecha_nac" name="fecha_nac" type="text" value='<?php print($cliente->getFechaNac()) ?>' class="datepicker">
            <label for="fecha_nac">Fecha de nacimiento</label>
        </div>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>call_split</i>
          	<input id='direccion_admin' type='text' name='direccion_admin' class='validate' value='<?php print($cliente->getDireccion()) ?>' required/>
          	<label for='direccion_admin'>Direccion</label>
        </div>

           <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>import_contacts</i>
          	<input id='documento_admin' type='text' name='documento_admin' class='validate' value='<?php print($cliente->getDocumento()) ?>' required/>
          	<label for='documento_admin'>Documento</label>
        </div>
        <div class='input-field col s12 m6'>
                <div class='input-field col s12 m6'>
                    <?php
                    Page::showSelect("Tipo de documento", "tipo_documento", $cliente->getTipoDocumento(), $cliente->getTipoDocumentos());
                    ?>
                </div>
          	
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave1' type='password' name='clave1' class='validate' value='<?php print($cliente->getClave()) ?>' required/>
            <label for='clave1'>Clave</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave2' type='password' name='clave2' class='validate' value='<?php print($cliente->getClave()) ?>' required/>
            <label for='clave2'>Confirmar clave</label>
        </div>
        <div class='file-field input-field col s12 m6'>
            <div class='btn waves-effect'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo'/>
            </div>
            <div class='file-path-wrapper'>
                <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
            </div> 
        </div>
        <div class='col s12 m6'>
            <p>
                <div class='switch white-text'>
                    <span>Estado:</span>
                    <label>
                        <i class='material-icons'>visibility_off</i>
                        <input type='checkbox' name='estado' <?php print($cliente->getEstado()?"checked":"") ?>/>
                        <span class='lever'></span>
                        <i class='material-icons'>visibility</i>
                    </label>
                </div>
            </p>
        </div>
    </div>
    </div>
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
    </div>
</form>