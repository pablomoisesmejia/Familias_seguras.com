<div class='container'>
    <div class='row'>
        <div class='col s12 m6'><h5 style='font-size:1.36em;' class='left-align'>Vehiculos en Venta</h5></div>
        <div class='col s12 m6'><a id='btn_anunciate'  href="../dashboard/account/register.php"  class='right-align'>Añade tu Anuncio</a></div>
    </div>
    <div class='row'>
        <div class='col s12 m4' class='left-align'>
            <div class="input-field">
                <select id = 'ordenar'>
                <option value="" disabled selected>Ordenar vehículos por</option>
                <option value="maa-z">Marcas de la A-Z</option>
                <option value="maz-a">Marcas de la Z-A</option>
                <option value="moa-z">Modelos de la A-Z</option>
                <option value="moz-a">Modelos de la Z-A</option>
                <option value="reciente">Vehículos mas recientes</option>
                <option value="antiguo">Vehículos mas antiguos</option>
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

        <div class='input-field col s6 l2'>
            <input id="minimo_año" type="text" class="validate" required/>
            <label for="minimo_año">Año minimo</label>
        </div>
        <div class='input-field col s6 l2'>
            <input id="maximo_año" type="text" class="validate" required/>
            <label for="maximo_año">Año maximo</label>
        </div>
        <div class='input-field col s6 l2'>
            <input id="minimo_kilometros" type="text" class="validate" required/>
            <label for="minimo_kilometros">Kilometros minimo</label>
        </div>
        <div class='input-field col s6 l2'>
            <input id="maximo_kilometros" type="text" class="validate" required/>
            <label for="maximo_kilometros">Kilometros maximo</label>
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
                <input type="checkbox" id="tapiceria_cuero" />
                <label for="tapiceria_cuero">Tapiceria de Cuero</label>
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
            <div class='col s6 m4 l3'>
                <input type="checkbox" id="dvd_trasero" />
                <label for="dvd_trasero">DVD trasero</label>
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

<!-- Aqui incluyo el codigo php de random -->
    <?php
    include_once('complemento_random/vehiculos.php');
    ?>

      
</div>