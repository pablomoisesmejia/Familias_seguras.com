<body>
  <div class="container">
        <!-- los datos de la pagina -->
    <div class="card">
      <div class="container">
        <div class="card-content">
          <h4>Seguro de motores</h4>
          <p style="color: black;"> Cotización</p>
        </div>
      </div>
      <div class="container">
        <div class="card-tabs">
          <ul class="tabs tabs-fixed-width" style="color:blue;">
            <li class="tab"><a class="active" id="frm1">Paso 1</a></li>
            <li class="tab"><a id="frm2">Paso 2</a></li>
            <li class="tab"><a id="frm3">Paso 3</a></li>
          </ul>
        </div>
      </div>
      <div class="card-content grey lighten-4">
        <div id="paso1">
         <!-- los datos de la pagina ------------------------------------------------------------------------------------------------>
          <div class="container">
              <div class='row'>
		            <div class='input-field col s12 '>
                  <i style="color:black;"class="material-icons prefix">directions_car</i>
                  <input id="marca" type="text" class="validate" required/>
                  <label class="" for="nombre_segv">Marca</label>
                </div>
              </div>
              <div class='row'>
		            <div class='input-field col s12 '>
                  <i style="color:black;"class="material-icons prefix">description</i>
                  <input id="modelo" type="text" class="validate" required/>
                  <label class="" for="nombre_segv">Modelo</label>
                </div>
              </div>
              <div class='row'>
		            <div class='input-field col s12 '>
                  <i style="color:black;"class="material-icons prefix">book</i>
                  <input id="ano" type="number" class="validate" required/>
                  <label class="" for="nombre_segv">Año</label>
                </div>
              </div>
              <div class='row'>
		            <div class='input-field col s12 '>
                  <i style="color:black;"class="material-icons prefix">menu</i>
                  <input id="placa" type="number" class="validate" required/>
                  <label class="" for="nombre_segv">Placa</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i style="color:black;"class="material-icons prefix">find_in_page</i>
                  <select>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="1" >Agencia</option>
                    <option value="2">Importado</option>
                  </select>
                  <label>Origen del vehiculo</label>
                </div>
              </div>
              <div class='row'>
		            <div class='input-field col s12 '>
                  <i style="color:black;"class="material-icons prefix">attach_money</i>
                  <input id="valor" type="number" class="validate" required/>
                  <label class="" for="nombre_segv">Valor del Vehiculo</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m12 l12">
                  <a class="waves-effect waves-light btn modal-trigger" href="#modalautos">Ver carros</a>
                  <a class="waves-effect waves-light btn modal-trigger" href="">Agregar</a>
                </div>
              </div>
              &nbsp
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
 <!-- Modal Structure -->
 <div id="modalautos" class="modal">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>

          <div id="paso2">
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
                <option value="5" data-icon="../../web/img/aseguradoras/qualitas.jpg">QUALITAS</option>
                <option value="6" data-icon="../../web/img/aseguradoras/sisa.png">SISA</option>
                <option value="7" data-icon="../../web/img/aseguradoras/azul.jpg">SEGUROS AZUL</option>
                
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
          <div class="row">
            <div class="col s6 m4 l5">
              <a href="index.php" class="waves-effect waves-light btn grey darken-1">Cancelar</a>                
            </div>
            <div class="col s12 m8 l7 push-l2 push-m2">
              <a id="anterior1" class="waves-effect waves-light btn light-blue">Anterior</a>              
              <a id="siguiente3" class="waves-effect waves-light btn light-blue">Siguiente</a>
            </div>
          </div>
        </div>
            
          </div>

          <div id="paso3">
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
        <div class="row">
          <div class="col s6 m4 l5">
            <a href="index.php" class="waves-effect waves-light btn grey darken-1">Cancelar</a>                
          </div>
          <div class="col s12 m8 l7 push-l2 push-m2">
            <a id="anterior2" class="waves-effect waves-light btn light-blue">Anterior</a>              
            <a href="index.php"class="waves-effect waves-light btn  light-blue">Cotizar | Finalizar</a>
          </div>
        </div>
        
      
       </div>

    </div>
          
  </div>
</div>
</div>
</body>