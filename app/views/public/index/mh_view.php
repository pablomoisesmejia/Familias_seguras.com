<body>
      <div class="container">
        <!-- los datos de la pagina -->
        <div class="card">
        <div class="container">
        <div class="card-content">
          <h4>Seguro Médico Hospitalario</h4>
          <p style="color: black;"> Cotización</p>
        </div>
        </div>
        <div class="container">
        <div class="card-tabs" >
          <ul class="tabs tabs-fixed-width" style="color:blue;">
            <li class="tab"><a class="active"  href="#test4">Paso 1</a></li>
            <li class="tab"><a  href="#test5">Paso 2</a></li>
            <li class="tab"><a href="#test6">Paso 3</a></li>
          </ul>
        </div>
        </div>
        <div class="card-content grey lighten-4">
        <div id="test4">
         <!-- los datos de la pagina ------------------------------------------------------------------------------------------------>
          <div class="container">

          <div class='row'>
            <div class='input-field col s12 '>
              <i  style="color:black;"class="material-icons prefix">account_circle</i>
              <input id="nombre_asegurado_medico" type="text" class="validate" required/>
              <label class="" for="nombre_asegurado_medico">Nombre de asegurado principal</label>
            </div>
          </div>
          <div class='row'>
            <div class='input-field col s12 '>
                <i  style="color:black;"class="material-icons prefix">event_note</i>
                <input  type="text" class="datepicker" id="fecha_naci" required/>
                <label class="" for="fecha_naci">Fecha de Nacimiento</label> 
            </div>
          </div>

          <div class='row'>
            <div class='input-field col s12 '>
              <i  style="color:black;"class="material-icons prefix">group</i>
              <input id="nombre_conyugue_medico" type="text" class="validate" required/>
              <label class="" for="nombre_conyugue_medico">Nombre de conyugue</label>
            </div>
          </div>


          <div class='row'>
              <div class='input-field col s12 '>
                  <i  style="color:black;"class="material-icons prefix">event_note</i>
                  <input  type="text" class="datepicker" id="fecha_naci_conyugue" required/>
                  <label class="" for="fecha_naci_conyugue">Fecha de Nacimiento del conyugue</label>
              </div>
          </div>
          <div class='row'>
            <div class='input-field col s12 '>
              <i  style="color:black;"class="material-icons prefix">face</i>
              <input id="hijos_cantidad_medico" type="number" class="validate" min="0" max="15" step="1" value="0"required/>
              <label class="" for="hijos_cantidad_medico">Cantidad de hijos menores de 25 años </label>
            </div>
          </div>
          <a href="index.php"class="waves-effect waves-light btn grey darken-1">Cancelar</a>
        </div>
      </div>


          <div id="test5">
          <!-- los datos de la pagina ------------------------------------------------------------------------------------------------>
            <div class="container">

            <div class="input-field col s12">
            <i  style="color:black;"class="material-icons prefix">verified_user</i>
              <select multiple>
                <option value="" disabled selected></option>
                <option value="1" data-icon="../../web/img/aseguradoras/acsa.png">ACSA</option>
                <option value="2" data-icon="../../web/img/aseguradoras/asesuisa.jpg">ASESUISA</option>
                <option value="3" data-icon="../../web/img/aseguradoras/mapfre.jpg">MAPFRE</option>
                <option value="4" data-icon="../../web/img/aseguradoras/panamericanlife.jpg">PAN AMERICAN LIFE</option>
                <option value="5" data-icon="../../web/img/aseguradoras/scotiaseguros.png">SCOTIA SEGUROS</option>
                <option value="6" data-icon="../../web/img/aseguradoras/sisa.png">SISA</option>
                <option value="7" data-icon="../../web/img/aseguradoras/vivir.png">VIVIR</option>
              </select>
             
              <label>Selecciona las aseguras, en las cuales desees cotizar</label>
            </div>

            
            <div class="input-field col s12">
            <i  style="color:black;"class="material-icons prefix">attach_money</i>
            <select>
              <optgroup label="Se te proporcionara tambien, el costo total (en en un unico pago)">
                <option value="8">Dos</option>
                <option value="9">Tres </option>
                <option value="10">Cuatro</option>
                <option value="11">Seis</option>
                <option value="12">Doce</option>
              </optgroup>
            </select>
            <label>Selecciona la cantidad de pagos, en la que deseas pagar tu seguro</label>
          </div>
          <a href="index.php"class="waves-effect waves-light btn grey darken-1">Cancelar</a>
            </div>
            
          </div>

          <div id="test6">
          <!-- los datos de la pagina ------------------------------------------------------------------------------------------------>
            <div class="container">
              <div class='row'>
		            <div class='input-field col s12 '>
                <i  style="color:black;"class="material-icons prefix">account_circle</i>
                  <input id="nombre_segv" type="text" class="validate" required/>
                  <label class="" for="nombre_segv">Tu Nombre</label>
                </div>
              </div>
              <div class='row'>
                <div class='input-field col s12 '>
                <i  style="color:black;"class="material-icons prefix">phone</i>
                  <input id="tel_segv" type="number" class="validate" required/>
                  <label class="" for="tel_segv">Telefono</label>
                </div>
              </div>
              <div class='row'>
                <div class='input-field col s12 '>
                <i  style="color:black;"class="material-icons prefix">email</i>
                  <input id="email_segv" name="correo" type="email" class="validate" required/>
                  <label class="" for="email_segv">Correo | Email</label>
                </div>
              </div>
              <div class='row'>
                <p class="frm_p_text_gray">¿Hora para Contactarle?</p>
                  <div class='input-field col s12 '>
                  <i  style="color:black;"class="material-icons prefix">phone_in_talk</i>
                  <select id="hora"> 
                    <optgroup label="Mañana">
                        <option value="manana_1">7:00 - 9:00am</option>
                        <option value="manana_2">10:00 - 12:00am</option>
                    </optgroup>
                    <optgroup label="Tarde">
                            <option value="tarde_1">1:00 - 3:00pm</option>
                            <option value="tarde_2">4:00 - 7:00pm</option>
                    </optgroup>      
                  </select>
              </div>
              
        </div>
        <a href="index.php"class="waves-effect waves-light btn  light-blue">Cotizar | Finalizar</a>
      
       </div>

    </div>
          
  </div>
</div>
</div>
</body>