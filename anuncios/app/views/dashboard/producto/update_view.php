<form method='post' enctype='multipart/form-data'>
    <div class='row'>

        <div class='input-field col s12 m6'>
            <?php
            Page::showSelect("Categoría", "categoria", $producto->getCategoria(), $producto->getCategorias());
            ?>
        </div>

        <div class='input-field col s12 m6'>
            <?php
            Page::showSelect("Planes", "plan", $producto->getPlan(), $producto->getPlanes());
            ?>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>note_add</i>
            <input id='nombre' type='text' name='nombre' class='validate' value='<?php print($producto->getNombre()) ?>' required/>
            <label for='nombre'>Nombre</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='descripcion' type='text' name='descripcion' class='validate' value='<?php print($producto->getDireccion()) ?>' required/>
            <label for='descripcion'>Direccion</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='municipio' type='text' name='municipio' class='validate' value='<?php print($producto->getMunicipio()) ?>' required/>
            <label for='descripcion'>Municipio</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='departamento' type='text' name='departamento' class='validate' value='<?php print($producto->getDepartamento()) ?>' required/>
            <label for='descripcion'>Departamento</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='tel_fijo' type='number' name='tel_fijo' class='validate' value='<?php print($producto->getTelFijo()) ?>'/>
            <label for='descripcion'>Telefono fijo</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='celular' type='number' name='celular' class='validate' value='<?php print($producto->getCelular()) ?>'/>
            <label for='descripcion'>Telefono Celular</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='wha' type='number' name='wha' class='validate' value='<?php print($producto->getWhatsapp()) ?>'/>
            <label for='descripcion'>WhatsApp</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='correo' type='email' name='correo' class='validate' value='<?php print($producto->getEmail()) ?>' required/>
            <label for='descripcion'>Correo de contacto</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='identificacion' type='number' name='identificacion' class='validate' value='<?php print($producto->getNumeroIdentidad()) ?>' required/>
            <label for='descripcion'>Numero de identidad</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='facebook' type='text' name='facebook' class='validate' value='<?php print($producto->getFacebook()) ?>'/>
            <label for='descripcion'>Link de Facebook</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='insta' type='text' name='insta' class='validate' value='<?php print($producto->getInstagram()) ?>'/>
            <label for='descripcion'>Link de Instagram</label>
        </div>

        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>description</i>
            <input id='pagina_web' type='text' name='pagina_web' class='validate' value='<?php print($producto->getPaginaWeb()) ?>'/>
            <label for='descripcion'>Link de Pagina web</label>
        </div>

        <div class="input-field col s6">
            <i class="material-icons prefix">description</i>
            <textarea id="especialidad" name='especialidad' class="materialize-textarea" value='<?php print($producto->getEspecialidad()) ?>'></textarea>
            <label for="especialidad">Especialidad</label>
        </div>

        <div class="input-field col s6">
            <i class="material-icons prefix">description</i>
            <textarea id="experiencia" name='experiencia' class="materialize-textarea" value='<?php print($producto->getExperiencia()) ?>'></textarea>
            <label for="experiencia">Experiencia</label>
        </div>

        <div class='file-field input-field col s12 m6'>
            <div class='btn waves-effect'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo' required/>
            </div>
            <div class='file-path-wrapper'>
                <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
            </div>
        </div>
    </div>

    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='actualizar' class='btn waves-effect blue tooltipped' data-tooltip='Actualizar'><i class='material-icons'>save</i></button>
    </div>
</form>