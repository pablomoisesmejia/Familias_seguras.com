<body>
  <div class="container">
    <!-- los datos de la pagina -->
    <div class="card">
      <div class="container">
        <div class="card-content">
          <h4>Seguro de vida individual</h4>
          <p style="color: black;"> Cotización</p>
        </div>
      </div>
      <div class="container">
        <div class="card-tabs">
          <ul class="tabs tabs-fixed-width" id="frm" style="color:blue;">
            <li class="tab"><a class="active" id="frm1">Paso 1</a></li>
            <li class="tab"><a id="frm2">Paso 2</a></li>
            <li class="tab"><a id="frm3">Paso 3</a></li>
          </ul>
        </div>
      </div>
      <div class="card-content grey lighten-4">
      <!-- Formulario del paso 1-->
        <div id="paso1">
      <!-- los datos de la pagina ------------------------------------------------------------------------------------------------>
          <div class="container">
            <div class='row'>
              <div class='input-field col s12'>
                <i style="color:black;"class="material-icons prefix">account_circle</i>
                <input id="nombre_asegurado_vida" type="text" class="validate" required/>
                <label class="" for="nombre_asegurado_vida">Nombre de asegurado principal</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12 '>
                <i style="color:black;"class="material-icons prefix">event</i>
                <input  type="text" class="datepicker" id="fecha_naci_vida" required/>
                <label class="" for="nombre_naci_vida">Fecha de Nacimiento</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12 '>
                <i style="color:black;"class="material-icons prefix">smoking_rooms</i>
                <select name="" id="fumador">
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="" disabled>se considera fumador cualquier persona que en los últimos 12 meses haya consumido 1 cigarro o más, o que tiempo atrás haya tenido un consumo superior a un cigarrillo diario.</option>
                    <option value="Si">SI</option>
                    <option value="No">NO</option>
                </select>
                <label class="" for="tel_segv">¿Eres Fumador?</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12 '>
                  <i style="color:black;"class="material-icons prefix">monetization_on</i>
                  <input id="suma_segv" type="number" class="validate" required/>
                  <label class="" for="email_segv">Suma Asegurada</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12 '>
              <i style="color:black;"class="material-icons prefix">work</i>
                  <select name="" id="cesion_bancaria">
                      <option value="" disabled selected>Selecciona una opción</option>
                      <option value="Si">SI</option>
                      <option value="No">NO</option>
                  </select>
                  <label class="" for="tel_segv">¿La necesita para un banco?</label>
              </div>
            </div>
            <a href="index.php"class="waves-effect waves-light btn grey darken-1">Cancelar</a>
            <a id="siguiente2" class="waves-effect waves-light btn  light-blue">Siguiente</a>
          </div>
        </div>
        <!-- Formulario del paso 2-->
        <div id="paso2">
          <!-- los datos de la pagina ------------------------------------------------------------------------------------------------>
          <div class="container">
            <div class="input-field col s12">
              <i style="color:black;"class="material-icons prefix">verified_user</i>
              <select multiple>
                <option value="" disabled selected></option>
                <option value="1" data-icon="../../web/img/aseguradoras/acsa.png">ACSA</option>
                <option value="2" data-icon="../../web/img/aseguradoras/asesuisa.jpg">ASESUISA</option>
                <option value="3" data-icon="../../web/img/aseguradoras/mapfre.jpg">MAPFRE</option>
                <option value="4" data-icon="../../web/img/aseguradoras/panamericanlife.jpg">PAN AMERICAN LIFE</option>
                <option value="5" data-icon="../../web/img/aseguradoras/scotiaseguros.png">SCOTIA SEGUROS</option>
                <option value="6" data-icon="../../web/img/aseguradoras/sisa.png">SISA</option>
                <option value="7" data-icon="../../web/img/aseguradoras/vivir.png">VIVIR</option>
                <option value="8" data-icon="../../web/img/aseguradoras/davivienda.jpg">DAVIVIENDA SEGUROS</option>
              </select>
              <label>Selecciona las aseguras, en las cuales desees cotizar</label>
            </div>
            <div class="input-field col s12">
              <i  style="color:black;"class="material-icons prefix">attach_money</i>
              <select>
                <optgroup label="Se te proporcionara tambien, el costo total (en en un unico pago)">
                  <option value="9">Dos</option>
                  <option value="10">Tres </option>
                  <option value="11">Cuatro</option>
                  <option value="12">Seis</option>
                  <option value="13">Doce</option>
                </optgroup>
              </select>
              <label>Selecciona la cantidad de pagos, en la que deseas pagar tu seguro</label>
            </div>
            <a href="index.php"class="waves-effect waves-light btn grey darken-1">Cancelar</a>
            <a id="siguiente3" class="waves-effect waves-light btn  light-blue">Siguiente</a>
          </div>
        </div>
          <!-- Formulario del paso 3-->
        <div id="paso3">
          <!-- los datos de la pagina ------------------------------------------------------------------------------------------------>
          <div class="container">
            <div class='row'>
              <div class='input-field col s12 '>
                <i style="color:black;"class="material-icons prefix">account_circle</i>
                  <input id="nombre_segv" type="text" class="validate" required/>
                  <label class="" for="nombre_segv">Tu Nombre</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12 '>
                <i style="color:black;"class="material-icons prefix">phone</i>
                <input id="tel_segv" type="number" class="validate" required/>
                <label class="" for="tel_segv">Telefono</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12 '>
                <i style="color:black;"class="material-icons prefix">email</i>
                <input id="email_segv" name="correo" type="email" class="validate" required/>
                <label class="" for="email_segv">Correo | Email</label>
              </div>
            </div>
            <div class='row'>
              <p class="frm_p_text_gray">¿Hora para Contactarle?</p>
              <div class='input-field col s12 '>
                <i style="color:black;"class="material-icons prefix">phone_in_talk</i>
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