<div class="container">
<form autocomplete='off' method='post'>
    <div class='row center-align'>
        <label>CLAVE ACTUAL</label>
    </div>
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave_actual_1' type='password' name='clave_actual_1' class='validate'/>
            <label for='clave_actual_1'>Contraseña antigua </label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave_actual_2' type='password' name='clave_actual_2' class='validate'/>
            <label for='clave_actual_2'>Confirmar contraseña antigua </label>
        </div>
    </div>
    <div class='row center-align'>
        <label>CLAVE NUEVA</label>
    </div>
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>vpn_key</i>
            <input id='clave_nueva_1' type='password' name='clave_nueva_1' class='validate'/>
            <label for='clave_nueva_1'>contraseña nueva </label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>vpn_key</i>
            <input id='clave_nueva_2' type='password' name='clave_nueva_2' class='validate'/>
            <label for='clave_nueva_2'>Confirmar contraseña nueva</label>
        </div>
    </div>

    
    <div class='row center-align'>
    <a href="../productos/index.php" data-tooltip='Cancelar' class="waves-effect waves-light tooltipped btn  # ef5350 red aligera-2">Cancelar</a>
        <button type='submit'  name='cambiar' data-tooltip='Crear' class=" waves-effect waves-light btn teal darken-1 tooltipped">Aceptar</button>
    </div>
</form>
</div>