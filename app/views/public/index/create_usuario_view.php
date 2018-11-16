<body>
    <div class="container">
        <!-- los datos de la pagina -->
        <div class="card">
            <div class="card-content">
                <h4>Crear Usuario</h4>
                <p style="color: black;"> Ejecutivos de venta</p>
            </div> 
            <div class="card-content grey lighten-4">
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
                        <div class='input-field col s12 '>
                            <i  style="color:black;"class="material-icons prefix">phone</i>
                            <input id="tel_segv" type="number" class="validate" required/>
                            <label class="" for="valor_de_constr_segm">Telefono</label>      
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
                        <div class='input-field col s12 '>
                            <i style="color:black;"class="material-icons prefix">account_circle</i>
                            <input id="usuario" type="text" class="validate" required/>
                            <label class="" for="nombre_segv">Usuario</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12 '>
                        <i style="color:black;"class="material-icons prefix">account_circle</i>
                            <input id="clave" type="password" class="validate" required/>
                            <label class="" for="apellido_segv">Contraseña</label>
                        </div>
                    </div>
                    <table id="table_cant_soli" class="bordered highlight centered responsive-table">
                        <thead>
                            <tr>
                                <th>Dias</th>
                                <th>Automotores</th>
                                <th>Incendio</th>
                                <th>Medico Hosp</th>
                                <th>Vida Individual</th>
                            </tr>
                        </thead>
                        <tbody id = "cant_solicitudes">
                            <tr>
                                <td>Lunes</td>
                                <td><input class="center campos" id="lunes_A" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="lunes_I" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="lunes_M" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="lunes_V" type="number" class="validate" value="0" min="0" ></td>
                            </tr>
                            <tr>
                                <td>Martes</td>
                                <td><input class="center campos" id="martes_A" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="martes_I" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="martes_M" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="martes_V" type="number" class="validate" value="0" min="0" ></td>
                            </tr><tr>
                                <td>Miercoles</td>
                                <td><input class="center campos" id="miercoles_A" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="miercoles_I" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="miercoles_M" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="miercoles_V" type="number" class="validate" value="0" min="0" ></td>
                            </tr><tr>
                                <td>Jueves</td>
                                <td><input class="center campos" id="jueves_A" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="jueves_I" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="jueves_M" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="jueves_V" type="number" class="validate" value="0" min="0" ></td>
                            </tr><tr>
                                <td>Viernes</td>
                                <td><input class="center campos" id="viernes_A" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="viernes_I" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="viernes_M" type="number" class="validate" value="0" min="0" ></td>
                                <td><input class="center campos" id="viernes_V" type="number" class="validate" value="0" min="0" ></td>
                            </tr><tr>
                                <td>Sabado</td>
                                <td><input class="center campos" id="sabado_A" type="number" class="validate" value="0" min="0"></td>
                                <td><input class="center campos" id="sabado_I" type="number" class="validate" value="0" min="0"></td>
                                <td><input class="center campos" id="sabado_M" type="number" class="validate" value="0" min="0"></td>
                                <td><input class="center campos" id="sabado_V" type="number" class="validate" value="0" min="0"></td>
                            </tr><tr>
                                <td>Domingo</td>
                                <td><input class="center campos" id="domingo_A" type="number" class="validate" value="0" min="0"></td>
                                <td><input class="center campos" id="domingo_I" type="number" class="validate" value="0" min="0"></td>
                                <td><input class="center campos" id="domingo_M" type="number" class="validate" value="0" min="0"></td>
                                <td><input class="center campos" id="domingo_V" type="number" class="validate" value="0" min="0"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                
                <div class="col push-l9 push-m9 push-s6">              
                  <a id="crear" class="btn waves-effect waves-light purple">Crear</a>
                </div>
              </div>
            </div>
        </div>
    </div>
</body>