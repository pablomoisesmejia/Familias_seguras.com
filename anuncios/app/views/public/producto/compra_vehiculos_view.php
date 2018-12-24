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
    </div>
    <div class='row' id='anuncios'>

    </div>

<!-- Aqui incluyo el codigo php de random -->
    <?php
    include_once('complemento_random/vehiculos.php');
    ?>

      
</div>