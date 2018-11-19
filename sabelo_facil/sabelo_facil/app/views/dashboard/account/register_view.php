<div class='centerlog'>
<p id='login_pritxt'>Bienvenido</p>
<span id='login_subtxt'><small>a continuacón se te registrara en el sistema, el primer usuario.</small></span>
</div>
<form method='post' autocomplete="off">
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
            <label for='alias'>Nombre de usuario</label>
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
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>import_contacts</i>
                
                    <?php
                    Page::showSelect("Tipo de documento", "tipo_documento", $usuario->getTipoDocumento(), $usuario->getTipoDocumentos());
                    ?>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave1' type='password' name='clave1' class='validate' value='<?php print($usuario->getClave()) ?>' required/>
            <label for='clave1'>Clave</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave2' type='password' name='clave2' class='validate' value='<?php print($usuario->getClave()) ?>' required/>
            <label for='clave2'>Confirmar clave</label>
        </div>

        <div class="g-recaptcha col s12 m6" data-sitekey="6LcRq2YUAAAAAPf76su6EsO6DpraVU1GiROrB9Xl">
        </div>

                </div>
               
       
    </div>
    <div class='row center-align'>
 	    <button type='submit' name='registrar' class='btn waves-effect blue'><i class='material-icons'>send</i></button>
    </div>

    
</form>