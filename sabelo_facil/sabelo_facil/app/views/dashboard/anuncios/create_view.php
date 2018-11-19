<form method='post' enctype='multipart/form-data' autocomplete="off">
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons white-text prefix'>note_add</i>
            <input id='nombre' type='text' name='nombre' class='validate' value='' required/>
            <label for='nombre'>Nombre Empresa</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons white-text prefix'>note_add</i>
            <input id='nombre' type='email' name='correo' class='validate' value='' required/>
            <label for='nombre'>Correo</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons white-text prefix'>note_add</i>
            <input id='telefono' type='number' name='telefono' class='validate' value='' required/>
            <label for='telefono'>Telefono</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons white-text prefix'>note_add</i>
            <input id='direccion' type='text' name='direccion' class='validate' value='' required/>
            <label for='direccion'>Direccion</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons white-text prefix'>note_add</i>
            <input id='url' type='url' name='empresaurl' class='validate' value='' required/>
            <label for='url'>Url de la Empresa</label>
        </div>
        
        <div class='file-field input-field col s12 m6'>
            <div class='btn waves-effect'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo' required/>
            </div>
            <div class='file-path-wrapper'>
                <input type='text' class='file-path validate' placeholder='Seleccione una imagen 900x365 px'/>
            </div>
        </div>
        
    </div>
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
    </div>
</form>