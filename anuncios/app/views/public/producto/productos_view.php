<div class='container'>

<?php
$categoria = 'Categoria';
print(" <div style='margin-top:22px;' ><h5 class='titles'><a href='index.php' id='btn_lines'>Directorio ></a>$categoria</h5></div>");
?>
    <div class='row'>
        <div class='col s12 m4' class='left-align'>
            <div class="input-field">
                <select id = 'ordenar'>
                <option value="" disabled selected>Ordenar por</option>
                <option value="na-z">Nombre de la A-Z</option>
                <option value="nz-a">Nombre de la Z-A</option>
                <option value="reciente">Anuncios del mas recientes al mas antiguos</option>
                <option value="antiguo">Anuncios del mas antiguos al mas reciente</option>
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
    include_once('complemento_random/directorio.php');
    ?>
</div>