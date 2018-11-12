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
                <input id="direccion_inmueble" type="text" class="validate" required/>
                <label class="active" for="direccion_inmueble">Dirección de Inmueble</label>
            </div>
        </div>

        <div class='row'>
            <div class='input-field col s12 '>
            <i  style="color:black;"class="material-icons prefix">directions_walk</i>
                <select name="" id="asegurado_calidad">
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
                <input id="valor_construccion" type="number" class="validate" min="1000" step="500" value="1000" required/>
                <label class="" for="valor_construccion">Valor de Construcciones</label>      
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
                <input id="valor_contenido" type="number" class="validate" min="1000" step="500" value="1000" required/>
                <label class="" for="valor_contenido">Valor del contenido</label>      
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


          <div id="paso2">
          <!-- los datos de la pagina ------------------------------------------------------------------------------------------------>
            <div class="container">

            <div class="input-field col s12" id="asegurador">
            <i  style="color:black;"class="material-icons prefix">verified_user</i>
              <select multiple id="aseguradoras">
              <option value="" disabled selected>Seleccione una o varias opciones</option>
                <option value="ACSA" data-icon="../../web/img/aseguradoras/acsa.png">ACSA</option>
                <option value="ASESUISA" data-icon="../../web/img/aseguradoras/asesuisa.jpg">ASESUISA</option>
                <option value="MAPRE" data-icon="../../web/img/aseguradoras/mapfre.jpg">MAPFRE</option>
                <option value="ASSA" data-icon="../../web/img/aseguradoras/assa.png">ASSA</option>
                <option value="SCOTIA SEGUROS" data-icon="../../web/img/aseguradoras/scotiaseguros.png">SCOTIA SEGUROS</option>
                <option value="SISA" data-icon="../../web/img/aseguradoras/sisa.png">SISA</option>
                <option value="SEGUROS AZUL" data-icon="../../web/img/aseguradoras/azul.jpg">SEGUROS AZUL</option>
                <option value="DAVIVIENDA SEGUROS" data-icon="../../web/img/aseguradoras/davivienda.jpg">DAVIVIENDA SEGUROS</option>
              </select>
             
              <label>Selecciona las aseguras, en las cuales desees cotizar</label>
            </div>

            
            <div class="input-field col s12">
            <i  style="color:black;" class="material-icons prefix">attach_money</i>
              <select id="cantidad_pagos">
                <option value="" disabled selected>Se te proporcionara tambien, el costo total (en un unico pago)</option>
                <option value="2">Dos</option>
                <option value="3">Tres </option>
                <option value="4">Cuatro</option>
                <option value="6">Seis</option>
                <option value="12">Doce</option>
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
                <div class='input-field col s12 '>
                  <i style="color:black;"class="material-icons prefix">event</i>
                  <input  type="text" class="datepicker" id="fecha_nacimiento" required/>
                  <label class="" for="fecha_nacimiento">Fecha de Nacimiento</label>
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
                <p >Esta información es opcional.</p>
                </div> 
                <div class="switch">
                <label>
                  Whatssap
                  <input type="checkbox">
                  <span class="lever"></span>
                  Movil
                </label>
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
            <a id="anterior2" class="waves-effect waves-light btn light-blue">Anterior</a>              
            <a id="cotizar" class="waves-effect waves-light btn  light-blue">Cotizar | Finalizar</a>
          </div>
        </div>
      
       </div>

    </div>
          
  </div>
</div>
</div>
<div id="view_email_send">
  <img id="confirmations_icon" src="../../web/img/icon/email_send.png" >
  <h3 style="font-size:1.8em;">¡La cotización ha sido exitosa!</h3> 
  <p>Revisa tu correo electrónico en las proximas 24 Horas para ver la cotización.</p>

  <a href="index.php" id="return_btn">Regresar</a> 
</div>
</body>