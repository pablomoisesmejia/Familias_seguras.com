<div class='container'>
    <div class='row'>
    <?php
    $filename = basename($_SERVER['PHP_SELF']);
    if($filename == 'propiedades_v.php')
    {
      print("
      <div class='col s12 m6'><h5 style='font-size:1.36em;' class='left-align'>Propiedades en Venta</h5></div>
      ");
    }
    if($filename == 'propiedades_alqui.php')
    {
      print("
      <div class='col s12 m6'><h5 style='font-size:1.36em;' class='left-align'>Propiedades en Alquiler</h5></div>
      ");
    }
    
    ?>
      <div class='col s12 m6'><a id='btn_anunciate'  href="../dashboard/account/register.php"  class='right-align'>Añade tu Anuncio</a></div>
    </div>
    <div class='row'>
        <div class='col s12 m4' class='left-align'>
            <div class="input-field">
                <select id = 'ordenar'>
                <option value="" disabled selected>Ordenar propiedades por</option>
                <option value="ca-z">Colonias de la A-Z</option>
                <option value="cz-a">Colonias de la Z-A</option>
                <option value="reciente">Propiedades mas recientes</option>
                <option value="antiguo">Propiedades mas antiguos</option>
                <option value="menor">Menor a mayor precio</option>
                <option value="mayor">Mayor a menor precio</option>
                </select>
            </div>
        </div>
        <div class='col s12 m2 l2'>
            <div class="input-field">
                <select id = 'cantidad'>
                    <option value="3" selected>3</option>
                    <option value="9">9</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="60">60</option>
                    <option value="90">90</option>
                </select>
                <label for="cantidad">Cantidad a mostrar</label>
            </div>
        </div>

        <div class='input-field col s6 l3'>
            <input id="minimo_precio" type="text" class="validate" required/>
            <label for="minimo_precio">Precio minimo</label>
        </div>
        <div class='input-field col s6 l3'>
            <input id="maximo_precio" type="text" class="validate" required/>
            <label for="maximo_precio">Precio maximo</label>
        </div>

        <div class='col s12 m3 l2'>
            <div class="input-field">
                <select id = 'tipos_propiedad'>
                    
                </select>
                <label for="tipos_propiedad">Tipos de propiedad</label>
            </div>
        </div>

        <div class='col s12 m3 l2'>
            <div class="input-field">
                <select id = 'colonias'>
                    
                </select>
                <label for="colonias">Filtro por colonia</label>
            </div>
        </div>
        
        <div class='col s12 m2 l2'>
            <p class='btn_advance' id='filtrar'>Filtrar</p>
        </div>
        <div class='col s12 m2 l2'>
            <p onclick='showhide_advance_filter();' class='btn_advance' id='filtros_avanzados'>Avanzado</p>
        </div>
    </div>
    <div id='advanced_div'>
        
        <h5>Filtro Avanzado de Búsqueda</h5>
        <p>El siguiente apartado es para una búsqueda mucho mas precisa sobre lo que estás buscando.</p>

        <div class='row'>
            <div class='input-field col s6 l3'>
                <input id="niveles" type="text" class="validate" required/>
                <label for="niveles">Niveles de propiedad</label>
            </div>
            <div class='input-field col s6 l3'>
                <input id="habitaciones" type="text" class="validate" required/>
                <label for="habitaciones">Habitaciones de propiedad</label>
            </div>
            <div class='input-field col s6 l3'>
                <input id="baños" type="text" class="validate" required/>
                <label for="baños">Baños de propiedad</label>
            </div>
            <div class='input-field col s6 l3'>
                <input id="cochera" type="text" class="validate" required/>
                <label for="cochera">Cochera de propiedad</label>
            </div>
        </div>
        <div class='row'>
            <div class='center'>
                <h5>Filtro por Amenidades</h5>
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
                <label for='area_servicio'>Area de servicio</label>
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

    </div>
    <div class='row' id='anuncios'>

    </div>
    <div class='row'>
        <div class='col s12 m4' >
            <div class="paginationjs paginationjs-big" id='paginacion'>
            </div>
        </div>
    </div>



         
</div>