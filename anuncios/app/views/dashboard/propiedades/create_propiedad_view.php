<form method='post' enctype='multipart/form-data'>
    <div class='row'>
        <div class='file-field input-field col s12 m6'>
            <div class='btn'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo' id='propiedades' multiple required/>
            </div>
            <div class='file-path-wrapper'>
                <input type='text' class='file-path validate' placeholder='Seleccione una ó varias imagenes'/>
            </div>
        </div>

        <div class="input-field col s12 l6">
            <i style="color:black;"class="material-icons prefix">home</i>
            <select id="transaccion">
            
            </select>
            <label>Tipo de transacción</label>
        </div>

        <div class="input-field col s12 l6">
            <i style="color:black;"class="material-icons prefix">home</i>
            <select id="tipo_propiedad">
            
            </select>
            <label>Tipo de propiedad</label>
        </div>

        <div class="input-field col s12 l6">
            <i style="color:black;"class="material-icons prefix">home</i>
            <select id="colonia">
            
            </select>
            <label>Colonia</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="municipio" type="text" class="validate" required/>
            <label class="" for="municipio">Municipio</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="departamento" type="text" class="validate" required/>
            <label class="" for="departamento">Departamento</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="terreno" type="text" class="validate" required/>
            <label class="" for="terreno">Terreno (v2)</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="construccion" type="text" class="validate" required/>
            <label class="" for="construccion">Construcción (m2)</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="niveles" type="number" min='0' step='1' class="validate" required/>
            <label class="" for="niveles">Niveles de la propiedad</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="habitaciones" type="number" min='0' step='1' class="validate" required/>
            <label class="" for="habitaciones">Habitaciones</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="baños" type="number" min='0' step='1' class="validate" required/>
            <label class="" for="baños">Baños</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="cochera" type="number" min='0' step='1' class="validate" required/>
            <label class="" for="cochera">Cochera</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">attach_money</i>
            <input id="valor_propiedad" type="text" class="validate" required/>
            <label class="" for="valor_propiedad">Valor de la Propiedad</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 l6">
            <i style="color:black;"class="material-icons prefix">home</i>
            <textarea id="descripcion" class="materialize-textarea"></textarea>
            <label for="descripcion">Descripción</label>
        </div>
    </div>

    <div class="row">
        <div class='center'>
            <h5>Seleccione las Amenidades de su propiedad</h5>
        </div>

        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='comunidad_privada'/>
            <label for='comunidad_privada'>Comunidad Privada</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='piscina' />
            <label for='piscina'>Piscina</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='cancha_basketball' />
            <label for='cancha_basketball'>Cancha de Basketball</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='cancha_tennis' />
            <label for='cancha_tennis'>Cancha de tennis</label>
        </div>

        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='cancha_futbol' />
            <label for='cancha_futbol'>Cancha de futbol</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='gimnasio' />
            <label for='gimnasio'>Gimnasio</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='spa_sauna' />
            <label for='spa_sauna'>Spa/Sauna</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='barbacoa' />
            <label for='barbacoa'>Barbacoa</label>
        </div>

        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='deck' />
            <label for='deck'>Deck</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='sistema_riego' />
            <label for='sistema_riego'>Sistema Riego</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='ac_central' />
            <label for='ac_central'>Aire Acondicionado Central</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='ac_independiente' />
            <label for='ac_independiente'>Aire Acondicionado Independiente</label>
        </div>

        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='atico' />
            <label for='atico'>Atico</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='portico' />
            <label for='portico'>Portico</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='sotano' />
            <label for='sotano'>Sotano</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='bodega' />
            <label for='bodega'>Bodega</label>
        </div>

        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='estudio' />
            <label for='estudio'>Estudio</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='area_sevicio' />
            <label for='area_sevicio'>Area de servicio</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='pantrie' />
            <label for='pantrie'>Pantrie</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='closets' />
            <label for='closets'>Closets</label>
        </div>

        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='walking_closet' />
            <label for='walking_closet'>Walking Closet</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='cocina_isla' />
            <label for='cocina_isla'>Cocina de Isla</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='desayunador' />
            <label for='desayunador'>Desayunador</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='terraza_nivel_inferior' />
            <label for='terraza_nivel_inferior'>Terraza Nivel Inferior</label>
        </div>

        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='terraza_nivel_superior' />
            <label for='terraza_nivel_superior'>Terraza Nivel Superior</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='sala_nivel_superior' />
            <label for='sala_nivel_superior'>Sala Nivel Superior</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='calentador_agua' />
            <label for='calentador_agua'>Calentador de Agua</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='cisterna' />
            <label for='cisterna'>Cisterna</label>
        </div>

        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='triturador_basura' />
            <label for='triturador_basura'>Triturador de basura</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='lavadora_platos' />
            <label for='lavadora_platos'>Lavadora de platos</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='sistema_gas' />
            <label for='sistema_gas'>Sistema de gas</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='conexion' />
            <label for='conexion'>Conexión Central de Cable, Internet y Teléfono</label>
        </div>

        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='paneles_solares' />
            <label for='paneles_solares'>Paneles solares</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='ventiladores_techo' />
            <label for='ventiladores_techo'>Ventilacion de techo</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='acceso_discapacitados' />
            <label for='acceso_discapacitados'>Acceso para Discapacitados</label>
        </div>
        <div class='col s6 m4 l3'>
            <input type='checkbox' value='0' id='ascensor' />
            <label for='ascensor'>Ascensor</label>
        </div>
    </div>

    <div class='row center-align'>
        <a href='../account/index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <a id='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></a>
    </div>
</form>