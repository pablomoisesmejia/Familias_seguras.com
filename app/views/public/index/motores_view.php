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
                <div class="input-field col s12" id="marca">
                  <i style="color:black;"class="material-icons prefix">directions_car</i>
                  <select id="marca_vehiculo">
                    
                  </select>
                  <label>Marca</label>
                </div>
              </div>
              <div class='row'>
                <div class="input-field col s12" id="modelo">
                  <i style="color:black;"class="material-icons prefix">description</i>
                  <select id="modelo_vehiculo">
                    <option value="" disabled selected>Seleccione una marca para mostrar los modelos</option>
                  </select>
                  <label>Modelo</label>
                </div>
              </div>
              <div class='row'>
		            <div class='input-field col s12 '>
                  <i style="color:black;"class="material-icons prefix">book</i>
                  <input id="anio" type="number" class="validate" required/>
                  <label class="" for="anio">Año</label>
                </div>
              </div>
              <div class='row'>
		            <div class='input-field col s12 '>
                  <i style="color:black;"class="material-icons prefix">menu</i>
                  <input id="placa" type="number" class="validate" required/>
                  <label class="" for="placa">Placa</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12" id="origen">
                  <i style="color:black;"class="material-icons prefix">find_in_page</i>
                  <select id="origen_vehiculo">
                    
                  </select>
                  <label>Origen del vehiculo</label>
                </div>
              </div>
              <div class='row'>
		            <div class='input-field col s12 '>
                  <i style="color:black;"class="material-icons prefix">attach_money</i>
                  <input id="valor_vehiculo" type="number" class="validate" required/>
                  <label class="" for="nombre_segv">Valor del Vehiculo</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m12 l12">
                  <a class="waves-effect waves-light btn modal-trigger purple" href="#modalautos">Ver carros</a>
                  <a id="agregar" class="waves-effect waves-light btn purple">Agregar</a>
                </div>
              </div>
              &nbsp
              <div class="row">
                <div class="col s6 m6 l6">
                  <a href="index.php" class="waves-effect waves-light btn grey darken-1">Cancelar</a>                
                </div>
                <div class="col push-l4 push-m3">              
                  <a id="siguiente2" class="btn waves-effect waves-light purple">Siguiente</a>
                </div>
              </div>
          </div>  
        </div>
<!-- Modal de vehiculos -->
<div id="modalautos" class="modal modal-fixed-footer">
  <div class="modal-content">
  <h3>Vehiculos</h3>
    <table id="table_vehiculo" class="bordered highlight centered responsive-table">
      <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Placa</th>
            <th>Borrar</th>
        </tr>
      </thead>
      <tbody id = "vehiculos">
      </tbody>
    </table>
  </div>
  <div class="modal-footer">
    <a class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
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
                <option value="QUALITAS" data-icon="../../web/img/aseguradoras/qualitas.jpg">QUALITAS</option>
                <option value="SISA" data-icon="../../web/img/aseguradoras/sisa.png">SISA</option>
                <option value="SEGUROS AZUL" data-icon="../../web/img/aseguradoras/azul.jpg">SEGUROS AZUL</option>
                
              </select>
             
              <label>Selecciona las aseguras, en las cuales desees cotizar</label>
            </div>

            
            <div class="input-field col s12">
            <i  style="color:black;"class="material-icons prefix">attach_money</i>
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
              <a id="anterior1" class="waves-effect waves-light btn purple">Anterior</a>              
              <a id="siguiente3" class="waves-effect waves-light btn purple">Siguiente</a>
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
            <a id="anterior2" class="waves-effect waves-light btn purple">Anterior</a>              
            <a id="cotizar" class="waves-effect waves-light btn purple">Cotizar | Finalizar</a>
          </div>
        </div>
        
      
       </div>

    </div>
          
  </div>
</div>
</div>
<div id="view_email_send">
<img id="confirmations_icon" src="../../web/img/icon/email_send.png" >
<h3 style="font-size:1.8em;">¡Su solicitud ha sido exitosa!</h3> 
<p>En un máximo de 48 Horas nuestro equipo te hará llegar las cotizaciones solicitadas, resumidad en un cuadro comparativo de costos y beneficios con cada una.<br>Att. el equipo de familiasseguras.com</p>
<img id="confirmations_icon_l" src="../../web/img/logo/logo_only.png" >
<div class="row">
 
 </div>
<a onclick=" " href="" id="return_btn">Regresar</a> 
</div>
</body>