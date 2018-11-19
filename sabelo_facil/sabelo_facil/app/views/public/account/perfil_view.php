<div class="container">
    <h4>Editar mi Perfil</h4>
<form autocomplete='off' method='post'>
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
            <i class='material-icons prefix'>picture_in_picture</i>
            <input id='telefono' type='text' name='documento' class='validate' value='<?php print($usuario->getDocumento()) ?>' required/>
            <label for='telefono'>Documento</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>text_rotation_none</i>
            <input id='telefono' type='text' name='username' class='validate' value='<?php print($usuario->getAlias()) ?>' required/>
            <label for='telefono'>Nombre de Usuario</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>gps_fixed</i>
            <input id='telefono' type='text' name='direccion' class='validate' value='<?php print($usuario->getDireccion()) ?>' required/>
            <label for='telefono'>Direccion</label>
        </div>
        
    </div>
    <div class='row right-align'>
        
        <a href="../cuenta/cambiar_contrasena.php" data-tooltip='Cancelar' class="waves-effect waves-light btn  # ef5350 blue aligera-2">Cambiar contraseña</a>
        <a href="../productos/index.php" data-tooltip='Cancelar' class="waves-effect waves-light btn  # ef5350 red aligera-2"><i class=" material-icons">cancel</i></a>
        <button type='submit'  name='editar' data-tooltip='Editar' class=" waves-effect waves-light btn # 66bb6a green aligera-2 tooltipped"><i class=" material-icons">check_circle</i></button>
    </div>
</form>
</div>