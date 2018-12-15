<form method='post' enctype='multipart/form-data'>
    <div class='row'>
        <div class='file-field input-field col s12 m6'>
            <div class='btn'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo' id='propiedades' multiple required/>
            </div>
            <div class='file-path-wrapper'>
                <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
            </div>
        </div>

        <div class="input-field col s12 l6">
            <i style="color:black;"class="material-icons prefix">home</i>
            <select id="transaccion">
            
            </select>
            <label>Tipo de transacción</label>
        </div>

        <div class="input-field col s12 l6">
            <i style="color:black;"class="material-icons prefix">home</i>
            <select id="tipo_propiedad">
            
            </select>
            <label>Tipo de propiedad</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="colonia" type="text" class="validate" required/>
            <label class="" for="colonia">Colonia</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="municipio" type="text" class="validate" required/>
            <label class="" for="municipio">Municipio</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="departamento" type="text" class="validate" required/>
            <label class="" for="departamento">Departamento</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="terreno" type="text" class="validate" required/>
            <label class="" for="terreno">Terreno (v2)</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="construccion" type="text" class="validate" required/>
            <label class="" for="construccion">Construcción (m2)</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="niveles" type="number" min='0' step='1' class="validate" required/>
            <label class="" for="niveles">Niveles de la propiedad</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="habitaciones" type="number" min='0' step='1' class="validate" required/>
            <label class="" for="habitaciones">Habitaciones</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="baños" type="number" min='0' step='1' class="validate" required/>
            <label class="" for="baños">Baños</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">home</i>
            <input id="cochera" type="number" min='0' step='1' class="validate" required/>
            <label class="" for="cochera">Cochera</label>
        </div>

        <div class='input-field col s12 l6'>
            <i style="color:black;"class="material-icons prefix">attach_money</i>
            <input id="valor_propiedad" type="text" class="validate" required/>
            <label class="" for="valor_propiedad">Valor de la Propiedad</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 l6">
            <i style="color:black;"class="material-icons prefix">home</i>
            <textarea id="descripcion" class="materialize-textarea"></textarea>
            <label for="descripcion">Descripción</label>
        </div>

        <div class="input-field col s12 l6">
            <i style="color:black;"class="material-icons prefix">home</i>
            <textarea id="amenidades" class="materialize-textarea"></textarea>
            <label for="amenidades">Amenidades</label>
        </div>
    </div>

    <div class='row center-align'>
        <a href='../account/index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <a id='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></a>
    </div>
</form>