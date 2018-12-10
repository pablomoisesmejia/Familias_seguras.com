<form method='post' enctype='multipart/form-data' autocomplete='off'>
    <div class='row'>
    <div class='input-field col s12 m6'>

        <div class="input-field col s6 m6">
            <div>
                <img src='../../../web/img/usuarios/<?php print($cliente->getImagen()) ?>' class='materialboxed' width='450' height='450'>
            </div>
    </div>

        </div>
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
          	<i class='material-icons prefix'>import_contacts</i>
          	<input id='documento_cliente' type='text' name='tel' class='validate' value='<?php print($cliente->getTel()) ?>' required/>
          	<label for='documento_cliente'>Telefono</label>
        </div>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>import_contacts</i>
          	<input id='documento_cliente' type='text' name='wha' class='validate' value='<?php print($cliente->getWha()) ?>' required/>
          	<label for='documento_cliente'>WhatsApp</label>
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
        <a href='index.php' class='btn waves-effect red tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='actualizar' class='btn waves-effect purple tooltipped' data-tooltip='Actualizar'><i class='material-icons'>save</i> Guardar </button>
        <?php
             print("
           <a title='' href='https://api.whatsapp.com/api/send?phone=53".$cliente->getWha()."'  class='btn waves-effect purple tooltipped' data-tooltip='Chatear'>WhatsAppear</a>
           <a id='tel_btn' href='tel:+503".$cliente->getTel()."' class='btn waves-effect purple tooltipped' >Llamale</a>
           ")
        ?>
    </div>
</form>