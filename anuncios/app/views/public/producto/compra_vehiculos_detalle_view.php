<div class='container'>
<div class='row'>
    <div class='col s12' style=''>
 
      
    
    <!-- codigo-->
    
          <?php
          $vehiculo->setIdVehiculo($data['PK_id_vehiculo']);
          $imgVehiculo = $vehiculo->getImgVehiculos();
          $filename = basename($_SERVER['PHP_SELF']);
          $_SESSION['url'] = $filename;
          print("
            <div style=' width:100%' >
                <div class='col s12 m6 l5'>
                    <div style='margin-top:8px;' class='row'>
                        
                        <h5 class='titles'> <a href='vehiculos_v.php' id='btn_lines'>Vehiculos Asegurables en Venta  ></a> Vehiculo Seleccionado</h5>
                
                        <div id='img_cont_detai'>
                            <img width='100%' height='auto' height='auto' src='../web/img/vehiculos/$imgVehiculo[0]'>
                            

                        <a class='botom_img_static_c_p' >
                            <div class='col s7' >
                                <div class='row' style='padding:0; margin:0;  font-size:1em'>$data[modelos_vehiculo]</div>
                                <div class='row' style='padding:0; margin:0; font-size:0.8em'>$data[marca_vehiculo]-$data[anio]</div>
                            </div>
                            <div class=''>
                                <div class='row' style='text-align:center; font-size:1.2em; padding-top:6px;'>$$data[valor]</div>
                            </div>
                            <p onclick='' style='margin-top:30px;' class='botom_img_c_p' >Prima de Seguro:</p>
                            <p onclick='' id='enviar_mensaje' class='botom_img_c_p' >Enviar Mensaje al Vendedor</p>
                            <p onclick='' id='cita' class='botom_img_c_p' >Programar Cita para Verlo</p>
                            <p onclick='' id='wha_vehiprop_btn'  class='botom_img_c_p' >Contactar por Whatsapp</p>
                            <p onclick='' id='tel_btn' class='botom_img_c_p' >Llamada Telefónica</p>
                    
                        </a>
                       
                       

                            <img id='ribbon' src='../web/img/ico/asegurable.png' >
                    
                    </div>
                </div>
            </div>
            <div class='col s12 m6 l4'><!--inicio del fin de informacion-->
            
                <div id='colco' class='row' >
                    <div class='col s6 maxed'> <h5 class='title'>Marca: </h5>  </div>
                    <div class='col s6'>   <p class='title_2'>$data[marca_vehiculo]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'> <h5 class='title'>Modelo: </h5></div>
                    <div class='col s6'>   <p class='title_2'>$data[modelos_vehiculo]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>   <h5 class='title'>Año: </h5></div>
                    <div class='col s6'>   <p class='title_2'>$data[anio]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Color: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[color]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Kilometraje: </h5></div>
                    <div class='col s6'>  <p class='title_2'>$data[kilometraje] km</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Transmición: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[transmision]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'> <h5 class='title'>Motor: </h5></div>
                    <div class='col s6'>   <p class='title_2'>$data[motor]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Vidrios Electricos: </h5></div>
                    <div class='col s6'><p class='title_2'>$data[vidrios_electricos]</p></div>
                </div>
            
                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Espejos Electricos: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[espejos_electricos]</p></div>
                </div>
                
            
                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Aire Acondicionado: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[aire_acondicionado]</p></div>
                </div>
                
                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Bolsas de Aire: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[bolsas_aire]</p></div>
                </div>
            
                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Sistema Eco: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[sistema_eco]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Mandos al Timón: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[mandos_timon]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Rines Especiales: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[rines_especiales]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Camara Trasera: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[camara_trasera]</p></div>
                </div>
            
                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Sensores de Parqueo: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[sensores_parqueo]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Bluetooth: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[bluetooth]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Combustible: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[combustible]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Sunroof: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[sunroof]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Luces Xenon: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[luces_xenon]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Cruise Control: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[cruise_control]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Mando a Distancia: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[mando_distancia]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>GPS: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[gps]</p></div>
                </div>

                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>Tapiceria de Cuero: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[tapiceria_cuero]</p></div>
                </div>
                
                <div style='margin-top:8px;' class='row'>
                    <div class='col s6 maxed'>  <h5 class='title'>DVD Trasero: </h5></div>
                    <div class='col s6'> <p class='title_2'>$data[dvd_trasero]</p></div>
                </div>
            </div><!--fin del fin de informacion-->
          ");
          ?>
    
    
                <div class='col s12 m12 l3' style='padding-top:20px;'>
                
            <div class='col s6 l12'><center><img id='banerlat' width='90%' height='auto' src='../web/img/banners/sq_banner.jpg'></center></div>
            <div class='col s6 l12'><center><img id='banerlat' width='90%' height='auto' src='../web/img/banners/sq_banner.jpg'></center></div>

            </div>
            </div>
    
            <!-- codigo-->
  
    </div>
    <!-- Aqui incluyo el codigo php de random -->
    <?php
    include_once('complemento_random/vehiculos.php');
    ?>
</div>
</div>