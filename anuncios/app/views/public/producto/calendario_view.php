<!--modal para agregar, modificar y eliminar citas-->
<div class="row">
    <h4 class="center" id="titulo">Programar Cita</h4>
    <form autocomplete="off">
        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">event_note</i>
            <input id="fecha" type="text" class="datepicker validate"/>
            <label class="active" id='fecha-label' for="fecha">Fecha</label>
        </div>
        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">event_note</i>
            <input id="hora" type="text" class="timepicker validate"/>
            <label class="" for="hora">Hora</label>
        </div>
        <div class='input-field col s12 l6'>
            <i class='material-icons prefix'>person</i>
            <input id='nombres' type='text' name='nombres' class='validate' required/>
            <label for='nombres'>Nombres</label>
        </div>
        <div class='input-field col s12 l6'>
            <i class='material-icons prefix'>email</i>
            <input id='correo' type='email' name='correo' class='validate' required/>
            <label for='correo'>Correo eletrónico</label>
        </div>
        <div class='input-field col s12 l6'>
            <i class='material-icons prefix'>person</i>
            <input id='lugar_reunion' type='text' name='lugar_reunion' class='validate' required/>
            <label for='lugar_reunion'>Lugar de Reunión</label>
        </div>
        <div class="input-field col s12 l12">
            <i style="color:black;"class="material-icons prefix">chat</i>
            <textarea id="asunto" name='asunto' class="materialize-textarea"></textarea>
            <label for="asunto">Asunto</label>
        </div>
    </form>
</div>
<div class='row'>
    <div class='center'>
        <a id="agregar" class="waves-effect waves-light btn btn-small">Agregar</a>
        <a id='cancelar' class="waves-effect waves-grey btn btn-small grey">Cancelar</a>
    </div>
</div>