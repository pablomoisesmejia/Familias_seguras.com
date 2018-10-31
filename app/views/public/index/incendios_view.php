<body>
      <div class="container">
        <!-- los datos de la pagina -->
        <div class="card">
        <div class="container">
        <div class="card-content">
          <h4>Seguro de incendios</h4>
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
            <i  style="color:black;"class="material-icons prefix">business</i>
                <select name="" id="tipo_inmueble">
                    <option value="" selected disabled>Seleccione una opción</option>
                    <option value="Casa de Habitación">Casa de Habitación</option>
                    <option value="Oficina">Oficina</option>
                    <option value="Local Comercial">Local Comercial</option>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Casa de playa">Casa de playa</option>
                    <option value="Casa de campo">Casa de campo</option>
                    <option value="Casa de de lago">Casa de de lago</option>
                </select>
                <label class="" for="tipo_inmueble_segv">Tipo de Inmueble</label>
            </div>           
          </div>

          <div class='row' style="margin-bottom:15px;">
            <div class='input-field col s12 '>
            <i  style="color:black;"class="material-icons prefix">directions</i>
                <input id="address" type="text" class="validate" required/>
                <label class="active" for="address">Dirección de Inmueble</label>
            </div>
        </div>

        <div class='row'>
            <div class='input-field col s12 '>
            <i  style="color:black;"class="material-icons prefix">directions_walk</i>
                <select name="" id="valor_contenido">
                    <option value="" selected disabled>Seleccione una opción</option>
                    <option value="Propietario">Propietario</option>
                    <option value="Inquilino">Inquilino</option>
                    <option value="Arrendante">Arrendante</option>
                </select>
                <label class="" for="tipo_inmueble_segv">Asegurar Inmueble en calidad de:</label>
            </div>           
        </div>

        <div class='row'>
          <div class='input-field col s1 '>   
            <p class="signo_de_campo">$</p>
          </div>  
          <div class='input-field col s6 '>
                <input id="valor_de_constr_segm" type="number" class="validate" min="1000" step="500" value="1000" required/>
                <label class="" for="valor_de_constr_segm">Valor de Construcciones</label>      
          </div>  
          <div class='input-field col s5 '>    
            <p class="frm_p_text_alert">No incluir terreno.</p>
          </div>   
        </div>

        <div class='row'>
          <div class='input-field col s1 '>   
            <p class="signo_de_campo">$</p>
          </div>  
          <div class='input-field col s6 '>
                <input id="valor_de_constr_segm" type="number" class="validate" min="1000" step="500" value="1000" required/>
                <label class="" for="valor_de_constr_segm">Valor del contenido</label>      
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
                <option value="4" data-icon="../../web/img/aseguradoras/assa.png">ASSA</option>
                <option value="5" data-icon="../../web/img/aseguradoras/scotiaseguros.png">SCOTIA SEGUROS</option>
                <option value="6" data-icon="../../web/img/aseguradoras/sisa.png">SISA</option>
                <option value="7" data-icon="../../web/img/aseguradoras/azul.jpg">SEGUROS AZUL</option>
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