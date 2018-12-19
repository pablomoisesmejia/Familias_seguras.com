<div class='container'>
    <div class='row'>
        <div class='col s12 m6'><h5 style='font-size:1.36em;' class='left-align'>Vehiculos en Venta</h5></div>
        <div class='col s12 m6'><a id='btn_anunciate'  href="../dashboard/account/register.php"  class='right-align'>Añade tu Anuncio</a></div>
    </div>
    <div class='row'>
        <div class='col s12 m4' class='left-align'>
            <div class="input-field">
                <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                </select>
                <label>Materialize Select</label>
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