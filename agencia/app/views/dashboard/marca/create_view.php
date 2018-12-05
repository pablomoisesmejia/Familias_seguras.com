<form method='post' enctype='multipart/form-data' autocomplete='off'>
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
          	<input id='telefono' type='text' name='telefono' class='validate' value='<?php print($Marca->getTelefono()) ?>' required/>
          	<label for='telefono'>Telefono</label>
        </div>
        
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
    </div>
</form>