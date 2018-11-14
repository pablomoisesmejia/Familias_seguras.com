<div class='white-text'>.</div>

<div class='center-align'><h4>Crear cuadro</h4></div>

<div class='row'>
    <div class="container">
        <form class='col s12' method='post'>
            <div class='row'>
                <div class='input-field col s12'>
                    <?php
                        Page::showSelect('Aseguradora', 'aseguradora',$cuadro->getIdAseguradora(),$cuadro->getAseguradoras());
                    ?>
                </div>
                <div class='input-field col s12'>
                    <input id='pla' type='text' name='plan' class='validate' autocomplete='off' value='<?php print($cuadro->getPlan())?>' required />
                    <label for='pla' class='black-text'>Plan</label>
                </div>
                <div class='input-field col s12'>
                    <input id='ofer' type='text' name='oferta' class='validate' autocomplete='off' value='<?php print($cuadro->getOferta())?>' required />
                    <label for='ofer' class='black-text'>Oferta</label>
                </div>
                <?php
                    if($_GET['id2'] == 2){
                        print("
                        <div class='input-field col s12'>
                            <input id='recu50' type='number' min='0.01' max='9999999.99' step='any' name='recup50' class='validate' autocomplete='off' value='' required />
                            <label for='recu50' class='black-text'>Recuperaci&oacute;n a los 50 años</label>
                        </div>
                        <div class='input-field col s12'>
                            <input id='recu60' type='number' min='0.01' max='9999999.99' step='any' name='recup60' class='validate' autocomplete='off' value='' required />
                            <label for='recu60' class='black-text'>Recuperaci&oacute;n a los 60 años</label>
                        </div>
                        <div class='input-field col s12'>
                            <input id='recu70' type='number' min='0.01' max='9999999.99' step='any' name='recup70' class='validate' autocomplete='off' value='' required />
                            <label for='recu70' class='black-text'>Recuperaci&oacute;n a los 70 años</label>
                        </div>
                        ");
                    }else{
                        print("");
                    }
                ?>
            </div>
            
            <div class='row'>
                <div class='col s12 right-align'>
                    <a class='btn waves-effect red darken-3' href='index.php'><i class='material-icons'></i>Cancelar</a>
                    <button type='submit' name='actualizar' class='btn waves-effect morado'><i class='material-icons'>save</i>Guardar cambios</button>
                </div>
            </div>
        </form>

        <div class='white-text'>.</div>
        <div class='white-text'>.</div>
    </div>
</div>