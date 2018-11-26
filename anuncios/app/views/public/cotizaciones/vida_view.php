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
          <ul class="tabs tabs-fixed-width" style="color:blue;">
            <li class="tab"><a class="active" id="frm1">Paso 1</a></li>
            <li class="tab"><a id="frm2">Paso 2</a></li>
          </ul>
        </div>
      </div>
      <div class="card-content grey lighten-4">
      <!-- Formulario del paso 1-->
        <div id="paso1">
      <!-- los datos de la pagina ------------------------------------------------------------------------------------------------>
          <div class="container">
            <div class='row'>
              <div class='input-field col s12 '>
                <i style="color:black;"class="material-icons prefix">event</i>
                <input  type="text" class="datepicker" id="fecha_naci_vida" required/>
                <label class="" for="fecha_naci_vida">Fecha de Nacimiento</label>
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
                  <label class="" for="suma_segv">Suma Asegurada</label>
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
            <div class="row">
              <div class="col s6 m6 l6">
                <a href="index.php" class="waves-effect waves-light btn grey darken-1">Cancelar</a>                
              </div>
              <div class="col push-l4 push-m3">              
                <a id="siguiente2" class="waves-effect waves-light btn light-blue">Siguiente</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Formulario del paso 2-->
        <div id="paso2">
        <!-- los datos de la pagina ------------------------------------------------------------------------------------------------>
          <div class="container">
            <div class='row'>
              <div class='input-field col s12 '>
                <i style="color:black;"class="material-icons prefix">account_circle</i>
                  <input id="nombre_segv" type="text" class="validate" required/>
                  <label class="" for="nombre_segv">Tus Nombres</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12 '>
                <i style="color:black;"class="material-icons prefix">account_circle</i>
                  <input id="apellido_segv" type="text" class="validate" required/>
                  <label class="" for="apellido_segv">Tus Apellidos</label>
              </div>
            </div>


            <div class='row'>
            <div class='input-field col s1 '>   
            <i  style="color:black;"class="material-icons prefix">phone</i>
            </div>

            <div class='input-field col s6 '>
                  <input id="tel_segv" type="number" class="validate" required/>
                  <label class="" for="valor_de_constr_segm">Telefono</label>      
            </div>  

            <div class='input-field col s5 '>   
            <div>
            <input id="tel_segv" type="number" class="validate" />
                  <label class="" for="valor_de_constr_segm">Whatsapp (opcional)</label>   
              </div> 
            
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
                <select id="hora_contacto"> 
                  <option value="" selected disabled>Seleccione una opción</option>
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
      <div class="row">
        <div class="col s6 m4 l5">
          <a href="index.php" class="waves-effect waves-light btn grey darken-1">Cancelar</a>                
        </div>
        <div class="col s12 m8 l7 push-l2 push-m2">
          <a id="anterior1" class="waves-effect waves-light btn light-blue">Anterior</a>              
          <a id="cotizar" class="waves-effect waves-light btn  light-blue">Cotizar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <div id="view_email_send">
<img id="confirmations_icon" src="../web/img/icon/email_send.png" >
<h3 style="font-size:1.8em;">¡Su solicitud ha sido exitosa!</h3> 
<p>En un máximo de 48 Horas nuestro equipo te hará llegar las cotizaciones solicitadas, resumidad en un cuadro comparativo de costos y beneficios con cada una.<br>Att. el equipo de familiasseguras.com</p>
<img id="confirmations_icon_l" src="../web/img/logo/logo_only.png" >
<div class="row">
 
 </div>
<a onclick=" " href="" id="return_btn">Regresar</a> 
</div>
</body>