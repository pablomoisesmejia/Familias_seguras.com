<div class='container'>
    <div class='center'>
        <h4>Enviar Mensaje</h4>
    </div>
    <form method="post">
        <div class='row'>
            <div class='input-field col s12 l6'>
                <i class='material-icons prefix'>person</i>
                <input id='nombres' type='text' name='nombres' class='validate' required/>
                <label for='nombres'>Nombres completos</label>
            </div>
            <div class='input-field col s12 l6'>
                <i class='material-icons prefix'>person</i>
                <input id='apellidos' type='text' name='apellidos' class='validate' required/>
                <label for='apellidos'>Apellidos completos</label>
            </div>
            <div class='input-field col s12 l6'>
                <i class='material-icons prefix'>phone</i>
                <input id='telefono' type='text' name='telefono' class='validate' required/>
                <label for='telefono'>Número de teléfono</label>
            </div>
            <div class='input-field col s12 l6'>
                <i class='material-icons prefix'>email</i>
                <input id='correo' type='email' name='correo' class='validate' required/>
                <label for='correo'>Correo eletrónico</label>
            </div>
        </div>
        <div class='row'>
            <div class="input-field col s12 l12">
                <i style="color:black;"class="material-icons prefix">chat</i>
                <textarea id="mensaje" name='mensaje' class="materialize-textarea"></textarea>
                <label for="mensaje">Mensaje</label>
            </div>
        </div>
        <div class='row center-align'>
            <a href='../account/index.php' class='btn waves-effect grey'>Cancelar</a>
            <button id='enviar' name='enviar'  type='submit' class='btn waves-effect purple'>Enviar</button>
        </div>
    </form>
</div>