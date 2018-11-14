<div class='white-text'>.</div>

<div class='center-align'><h4>Crear prima</h4></div>

<div class='row'>
    <div class="container">
        <form class='col s12' method='post'>
            <div class='row'>
                <div class='input-field col s12'>
                    <?php
                        Page::showSelect('Cuadro comparativo', 'cuadro',$prima->getIdCuadro(),$prima->getCuadros());
                    ?>
                </div>
                <div class='input-field col s12'>
                    <input id='prim' type='text' name='prima' class='validate' autocomplete='off' value='<?php print($prima->getPrima())?>' required />
                    <label for='prim' class='black-text'>Prima</label>
                </div>
            </div>
            
            <div class='row'>
                <div class='col s12 right-align'>
                    <a class='btn waves-effect red darken-3' href='index.php'><i class='material-icons'></i>Cancelar</a>
                    <button type='submit' name='crear' class='btn waves-effect morado'><i class='material-icons'>save</i>Guardar cambios</button>
                </div>
            </div>
        </form>

        <div class='white-text'>.</div>
        <div class='white-text'>.</div>
    </div>
</div>