<form method='post' enctype='multipart/form-data' autocomplete="off">
    <div class='row'>
        <div class='input-field col s12 m6 l6'>
          	<i class='material-icons prefix'>note_add</i>
          	<input id='nombre' type='text' name='nombre' class='validate' value='<?php print($cupon->getNombre()) ?>' required/>
          	<label for='nombre'>Nombre</label>
        </div>
        <div class='input-field col s12 m6 l6'>
          	<i class='material-icons prefix'>shopping_cart</i>
          	<input id='precio' type='number' name='precio' class='validate' max='999.99' min='0.01' step='any' value='<?php print($cupon->getPrecio()) ?>' required/>
          	<label for='precio'>Precio ($)</label>
        </div>
        <div class='input-field col s12 m6 l6'>
          	<i class='material-icons prefix'>description</i>
          	<input id='descripcion' type='text' name='descripcion' class='validate' value='<?php print($cupon->getDescripcion()) ?>' required/>
          	<label for='descripcion'>Descripción</label>
        </div>
        <div class='input-field col s12 m6 l6'>
          	<i class='material-icons prefix'>description</i>
          	<input id='existencia' type='number' name='existencia' class='validate' value='<?php print($cupon->getExistencia()) ?>' required/>
          	<label for='existencia'>existencia</label>
        </div>
        <div class='input-field col s12 m3 l3'>
            <i class="material-icons prefix">insert_invitation</i>
            <input id="fecha_nac" name="fecha_inicio" type="text" value='<?php print($cupon->getFechainicio()) ?>' class="datepicker">
            <label for="fecha_nac">Fecha de inicio</label>
        </div>
        <div class='input-field col s12 m3 l3'>
            <i class="material-icons prefix">insert_invitation</i>
            <input id="fecha_nac" name="fecha_final" type="text" value='<?php print($cupon->getFechafinal()) ?>' class="datepicker">
            <label for="fecha_nac">Fecha de vencimiento</label>
        </div>
        <div class='input-field col s12 m6 l6'>
            <?php
            Page::showSelect("Comercio", "comercio", $cupon->getComercio(), $cupon->getComercios());
            ?>
        </div>
        <div class='col s12 m6 l2 offset-l1'>
            <p>
                <div class='switch'>
                    <span class='white-text'>Limite:</span>
                    <label>
                    <i class="material-icons white-text">indeterminate_check_box</i>
                        <input type='checkbox' name='limite' <?php print($cupon->getLimite()?"checked":"") ?>/>
                        <span class='lever'></span>
                        <i class="material-icons white-text">check_box</i>
                    </label>
                </div>
            </p>
        </div>
        
        <div class='col s12 m6 l3'>
            <p>
                <div class='switch'>
                    <span class='white-text'>Estado:</span>
                    <label>
                        <i class='material-icons'>visibility_off</i>
                        <input type='checkbox' name='estado' <?php print($cupon->getEstado()?"checked":"") ?>/>
                        <span class='lever'></span>
                        <i class='material-icons'>visibility</i>
                    </label>
                </div>
            </p>
        </div>
        <div class='input-field col s12 m6 l6'>
            <?php
            Page::showSelect("Categoría", "categoria", $cupon->getCategoria(), $cupon->getCategorias());
            ?>
        </div>

    </div>
    <div class='row right-align'>
       
    <a href="index.php" data-tooltip='Cancelar' class="waves-effect waves-light btn  # ef5350 red aligera-2"><i class=" material-icons">cancel</i></a>
        <button type='submit'  name='crear' data-tooltip='Crear' class=" waves-effect waves-light btn # 66bb6a green aligera-2 tooltipped"><i class=" material-icons">check_circle</i></button>
    </div>
</form>