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
                    <option value="" disabled selected>Cantidad a mostrar</option>
                    <option value="3">3</option>
                    <option value="9">9</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="60">60</option>
                    <option value="90">90</option>
                </select>
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
    include_once('complemento_random/propiedades_venta.php');
    ?>

         
</div>