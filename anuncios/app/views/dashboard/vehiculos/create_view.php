<form method='post' enctype='multipart/form-data'>
    <div class='row'>
        <div class='file-field input-field col s12 m6'>
            <div class='btn'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo' id='vehiculos' multiple required/>
            </div>
            <div class='file-path-wrapper'>
                <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
            </div>
        </div>
    
        <div class="input-field col s12 l6" id="marca">
            <i style="color:black;"class="material-icons prefix">directions_car</i>
            <select id="marca_vehiculo">
            
            </select>
            <label>Marca</label>
        </div>

        <div class="input-field col s12 l6" id="modelo">
            <i style="color:black;"class="material-icons prefix">directions_car</i>
            <select id="modelo_vehiculo">
            <option value="" disabled selected>Seleccione una marca para mostrar los modelos</option>
            </select>
            <label>Modelo</label>
        </div>

        <div class="input-field col s12 l6" id="anio">
            <i style="color:black;"class="material-icons prefix">directions_car</i>
            <select id="anio_vehiculo">
            <option value="" disabled selected>Seleccione el año del vehículo</option>
            </select>
            <label>Año del vehículo</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">directions_car</i>
            <input id="color_vehiculo" type="text" class="validate" required/>
            <label class="" for="color_vehiculo">Color del vehículo(mira tarjeta de circulación)</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">directions_car</i>
            <input id="kilometraje" type="text" class="validate" required/>
            <label class="" for="kilometraje">Kilometraje actual del vehículo</label>
        </div>

        <div class="input-field col s12 l6">
            <i style="color:black;"class="material-icons prefix">directions_car</i>
            <select id="transmision">
            <option value="" disabled selected>Seleccione una opción</option>
                <option value="Manual">Manual</option>
                <option value="Automatico">Automatico</option>
            </select>
            <label>Transmision del vehículo</label>
        </div>
        
        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">directions_car</i>
            <input id="motor" type="number" min='.1' step='.1' class="validate" required/>
            <label class="" for="motor">Motor</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">attach_money</i>
            <input id="valor_vehiculo" type="text" class="validate" required/>
            <label class="" for="valor_vehiculo">Valor del Vehiculo</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">directions_car</i>
            <input id="placa" type="text" class="validate" required/>
            <label class="" for="placa">Número de placa(Esto no se mostrará)</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">account_circle</i>
            <input id="whatsapp" type="text" class="validate" required/>
            <label class="" for="whatsapp">whatsapp</label>
        </div>

        <div class='input-field col s12 l6'>
            <i  style="color:black;"class="material-icons prefix">phone</i>
            <input id="telefono" type="number" class="validate" required/>
            <label class="" for="telefono">Teléfono ó celular</label>      
        </div>
    </div>
    <div class='row'>
        <div class='center'>
            <h5>Seleccione las caracteristicas de su vehículo</h5>
        </div>
        <div class='col s6 m4 l5'>
            <input type="checkbox" id="vidrios_electricos" />
            <label for="vidrios_electricos">Vidrios Eléctricos</label>
        </div>
        <div class='col s6 m4 l4'>
            <input type="checkbox" id="espejos_electricos" />
            <label for="espejos_electricos">Espejos Eléctricos</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type="checkbox" id="aire_acondicionado" />
            <label for="aire_acondicionado">Aire Acondicionado</label>
        </div>

        <div class='col s6 m4 l5'>
            <input type="checkbox" id="bolsas_aire" />
            <label for="bolsas_aire">Bolsas de aire</label>
        </div>
        <div class='col s6 m4 l4'>
            <input type="checkbox" id="sistema_eco" />
            <label for="sistema_eco">Sistema ECO</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type="checkbox" id="mandos_timon" />
            <label for="mandos_timon">Mandos al Timón</label>
        </div>


        <div class='col s6 m4 l5'>
            <input type="checkbox" id="rines_especiales" />
            <label for="rines_especiales">Rines Especiales</label>
        </div>
        <div class='col s6 m4 l4'>
            <input type="checkbox" id="camara_trasera" />
            <label for="camara_trasera">Camara Trasera</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type="checkbox" id="sensores_parqueo" />
            <label for="sensores_parqueo">Sensores de Parqueo</label>
        </div>

        <div class='col s6 m4 l5'>
            <input type="checkbox" id="Bluetooth" />
            <label for="Bluetooth">Bluetooth</label>
        </div>
        <div class='col s6 m4 l4'>
            <input type="checkbox" id="Combustible" />
            <label for="Combustible">Combustible</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type="checkbox" id="sunroof" />
            <label for="sunroof">Sunroof</label>
        </div>

        <div class='col s6 m4 l5'>
            <input type="checkbox" id="luces_xenon"/>
            <label for="luces_xenon">Luces Xenon</label>
        </div>
        <div class='col s6 m4 l4'>
            <input type="checkbox" id="cruise_control" />
            <label for="cruise_control">Cruise Control</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type="checkbox" id="mando_distancia" />
            <label for="mando_distancia">Mando a Distancia</label>
        </div>

        <div class='col s6 m4 l5'>
            <input type="checkbox" id="gps" />
            <label for="gps">GPS</label>
        </div>
        <div class='col s6 m4 l4'>
            <input type="checkbox" id="tapiceria_cuero" />
            <label for="tapiceria_cuero">Tapiceria de Cuero</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type="checkbox" id="dvd_trasero" />
            <label for="dvd_trasero">DVD trasero</label>
        </div>
    </div><!--div del row-->
    <div class='row center-align'>
        <a href='../account/index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <a id='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></a>
    </div>
</form>