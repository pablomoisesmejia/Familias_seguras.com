<div id='calendario'></div>

<!--modal para agregar, modificar y eliminar citas-->
<div id="modalCitas" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4 class="modal-title" id="titulo">Agregar Evento</h4>
        <div class="divider"></div>
        <div class="row">
            <div class="col s6" id="id_cita">
                <h6>Id:</h6>
                <input type="text" id="id" name="id" class="validate"/>
            </div>
            <div class="col s12">
                <h6>Titulo:</h6>
                <input type="text" id="tituloEvento" name="tituloEvento" class="validate"/>
            </div>
            <div class="col s6">
                <h6>Fecha:</h6>
                <input type="text" id="fecha" name="fecha" class="validate" disabled/>
            </div>
            <div class="col s6">
                <h6>Hora:</h6>
                <input type="text" id="hora" name="hora" class="timepicker">
            </div>
            <div class="col s12">
                <h6>Descripcion:</h6>
                <textarea id="descripcionEvento" name="descripcionEvento" class="materialize-textarea" class="validate"></textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a id="agregar" class="waves-effect waves-light btn btn-small">Agregar</a>
        <a id="modificar" class="waves-effect waves-light btn btn-small">Modificar</a>
        <a id="eliminar" class="waves-effect waves-light btn btn-small red">Eliminar</a>
        <a class="modal-action modal-close waves-effect waves-grey btn btn-small grey">Cancelar</a>
    </div>
</div>