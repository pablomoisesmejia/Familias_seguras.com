<div id='calendario'></div>

<div id="modalCitas" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4 class="modal-title" id="titulo">Cita</h4>
        <div class="divider"></div>
        <form autocomplete="off" name='cita'>
            <div class="row">
                <input id="id_cita" type="text" class="validate"/>
                <div class='input-field col s12 l6'>
                    <i style="color:black;"class="material-icons prefix">event_note</i>
                    <input id="fecha" type="text" class="validate" disabled />
                    <label class="label" id='fecha-label' for="fecha">Fecha</label>
                </div>
                <div class='input-field col s12 l6'>
                    <i style="color:black;"class="material-icons prefix">event_note</i>
                    <input id="hora" type="text" class="timepicker validate" disabled />
                    <label class="label" for="hora">Hora</label>
                </div>
                <div class='input-field col s12 l6'>
                    <i class='material-icons prefix'>person</i>
                    <input id='nombres' type='text' name='nombres' class='validate' disabled />
                    <label class="label" for='nombres'>Nombres</label>
                </div>
                <div class='input-field col s12 l6'>
                    <i class='material-icons prefix'>email</i>
                    <input id='correo' type='email' name='correo' class='validate' disabled />
                    <label class="label" for='correo'>Correo eletrónico</label>
                </div>
                <div class='input-field col s12 l6'>
                    <i class='material-icons prefix'>person</i>
                    <input id='lugar_reunion' type='text' name='lugar_reunion' class='validate' disabled/>
                    <label class="label" for='lugar_reunion'>Lugar de Reunión</label>
                </div>
                <div class="input-field col s12 l12">
                    <i style="color:black;"class="material-icons prefix">chat</i>
                    <textarea id="asunto" name='asunto' class="materialize-textarea" disabled></textarea>
                    <label class="label" for="asunto">Asunto</label>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a id="aprobar" class="waves-effect waves-light btn btn-small">Aprobar cita</a>
        <a id='rechazar' class="modal-action modal-close waves-effect waves-grey btn btn-small grey">Rechazar cita</a>
    </div>
</div>