<div class="container">
        <div class="row">

        <div class="col s12 m12 l12">

        <!-- inicia div de card de reportes -->
               <!-- aqui copian el div para hacer cada card -->
                <div class="col s12 m3 l4">
                        <div class="card blue darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Ventas </span>
                                <p>Reporte basico de las ventas realizadas</p>
                            </div>
                            <div class="card-action">
                               
                                <?php 
                            print("<a class =' white-text' href='ventas.php?nombre=$_SESSION[nombre]&apellido=$_SESSION[apellido]'>Visualizar</a>");
                                
                                ?>
                            </div>
                        </div>
                </div>
        <!-- finalliza card de reporte -->
            <!-- aqui copian el div para hacer cada card -->
            <div class="col s12 m3 l4">
                        <div class="card orange darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Comercios Disponibles</span>
                                <p>Listado de comercios disponibles</p>
                            </div>
                            <div class="card-action white-text">
                            <?php 
                            print("<a class =' white-text' href='comercios_dis.php?nombre=$_SESSION[nombre]&apellido=$_SESSION[apellido]'>Visualizar</a>");
                                
                                ?>
                            </div>
                        </div>
                </div>
        <!-- finalliza card de reporte -->
        <!-- inicia div de card de reportes -->
               <!-- aqui copian el div para hacer cada card -->
               <div class="col s12 m3 l4">
                        <div class="card brown darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Comercios pendientes</span>
                                <p>Listado de comercios pendientes</p>
                            </div>
                            <div class="card-action">
                                
                                <?php 
                            print("<a class =' white-text' href='comercios_pen.php?nombre=$_SESSION[nombre]&apellido=$_SESSION[apellido]'>Visualizar</a>");
                                
                                ?>
                            </div>
                        </div>
                </div>
        <!-- finalliza card de reporte -->
        
        <!-- inicia div de card de reportes -->
               <!-- aqui copian el div para hacer cada card -->
                <div class="col s12 m3 l4">
                        <div class="card red darken-1 ">
                            <form action="ventas_fechas.php" method="GET">
                            <div class="card-content white-text center">
                                <span class="card-title">Ventas por rango de fecha</span>
                                
                                <input class="datepicker" value="fecha inicio"name="fechainicio">
                                <input class="datepicker" value="fecha fin"name="fechafin">
                                <input class="btn-flat white-text " type="submit"  name="" >
                            </div>
                            </form>
                        </div>
                </div>

                <div class="col s12 m3 l4">
                        <div class="card purple darken-1 ">
                            <form action="membresia_fecha.php" method="GET">
                            <div class="card-content white-text center">
                                <span class="card-title">Membresias por rango de fecha</span>

                                <input class="datepicker" value="fecha inicio"name="fechainicio">
                                <input class="datepicker" value="fecha fin"name="fechafin">
                                <input class="btn-flat white-text" type="submit">
                            </div>
                            
                            </form>
                        </div>
                </div>

                <div class="col s12 m3 l4">
                        <div class="card cyan darken-2 ">
                            <form action="membresia_fecha.php" method="GET">
                            <div class="card-content white-text center">
                                <span class="card-title">Membresias por rango de fecha</span>

                                <input class="datepicker" value="fecha inicio"name="fechainicio">
                                <input class="datepicker" value="fecha fin"name="fechafin">
                                <input class="btn-flat white-text" type="submit">
                            </div>
                            
                            </form>
                        </div>
                </div>
        <!-- finalliza card de reporte -->
        <!-- inicia div de card de reportes -->

        <!-- inicia div de card de reportes -->
               <!-- aqui copian el div para hacer cada card -->
               <div class="col s12 m3 l4">
                        <div class="card green darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Reporte 3</span>
                                <p>*** Descripcion del reporte ****</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Visualizar</a>
                                
                            </div>
                        </div>
                </div>
        <!-- finalliza card de reporte -->
        <!-- inicia div de card de reportes -->
               <!-- aqui copian el div para hacer cada card -->
               <div class="col s12 m3 l4">
                        <div class="card pink darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Reporte 4</span>
                                <p>*** Descripcion del reporte ****</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Visualizar</a>
                                
                            </div>
                        </div>
                </div>
        <!-- finalliza card de reporte -->

               
        </div>
        </div>


</div>