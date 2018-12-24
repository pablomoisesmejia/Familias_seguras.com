<div class='container'>
<div class='row'>
    <div class='col s12' style=''>
 
    <?php
    $propiedad->setIdPropiedad($data['PK_id_propiedad']);
    $imgPropiedad = $propiedad->getImgPropiedad();
    $filename = basename($_SERVER['PHP_SELF']);
    print("
    <!-- DIV IZQUIERDO -->
        <div class='col s12 m12 l9'>
            <!-- FOTO Y DETALLE -->    
            <div class='row'>
                <div style=' width:100%' class=''>
                    <div class='col s12 m8 l8' style=''>
                        <div style='margin-top:10px;' class='row'>
                        ");
                        if($data['transaccion'] == 'Venta')
                        {
                            print("<h5 class='titles'> <a href='propiedades_v.php' id='btn_lines'>Propiedades Asegurables en Venta   ></a> Propiedad Seleccionada</h5>");
                        }
                        if($data['transaccion'] == 'Alquiler')
                        {
                            print("<h5 class='titles'> <a href='propiedades_alqui.php' id='btn_lines'>Propiedades Asegurables en Alquiler   ></a> Propiedad Seleccionada</h5>");
                        }
                                                
                        print("
                            <div id='img_cont_detail_prop'>
                            <img width='100%' height='auto' src='../web/img/propiedades/$imgPropiedad[0]'>
                                    
                            </div>

                            <a class='botom_img_static_c_p_initial' >
                                <div class='col s7' >
                                    <div class='row' style='padding:0; margin:0;  font-size:1em'>CV-201811_0002</div>
                                    <div class='row' style='padding:0; margin:0; font-size:0.8em'>$data[colonia]</div>
                                </div>
                                <div class=''>
                                    <div class='row' style='text-align:center; font-size:1.2em; padding-top:6px;'>$$data[valor]</div>
                                </div>
                            </a>
                            <a class='botom_img_static_c_p_props' >
                                <div class='block_proper_props'>
                                    <div class='icon_prop_props'><img class='proper_ico' src='../web/img/ico/garage.png'><span class='proper_ico_txt'>$data[cochera]</span></div>
                                    <div class='icon_prop_props'><img class='proper_ico' src='../web/img/ico/banera.png'><span class='proper_ico_txt'>$data[baños]</span></div>
                                    <div class='icon_prop_props'><img class='proper_ico' src='../web/img/ico/bed.png'><span class='proper_ico_txt'>$data[habitaciones]</span></div>    
                                </div> 
                                <p id='txt_primas_1' class='txt_primas'>Prima Seguro de Incendio $225.000 / Mes</p>
                            </a>
                            <a class='botom_img_static_c_p_asegs' >
                                <p class='txt_primas'>Prima Seguro de Incendio $225.000 / Mes</p>
                            </a>
                            <div>
                                <p onclick='' id='enviar_mensaje' class='botom_img_c_p' >Enviar Mensaje al Vendedor <a href='whatsapp://send/?phone=503$data[whatsapp]' id='wha_vehiprop_btn'><img class='icoredss' src='../web/img/ico/wha_icon.png'></a><a id='tel_btn' href='tel:+503$data[telefono]' class='icoredss'><i style='color:white; font-size:22px;' class='material-icons prefix '>phone</i></a></p>
                                
                            </div>
                            <p onclick='' id='cita' class='botom_img_c_p' >Programar Cita para Verlo</p>
                        </div>
                    </div>
                    <div class='col s12 m4   l4'>
                            
                        <div style='margin-top:48px;' class='row'>
                            <div class='col s6 maxed'> <h5 class='title'>Tipo: </h5>  </div>
                            <div class='col s6'>   <p class='title_2'>$data[tipo_propiedad]</p></div> 
                        </div>
            
                        <div style='margin-top:8px;' class='row'>
                            <div class='col s6 maxed'> <h5 class='title'>Transacción: </h5></div>
                            <div class='col s6'>   <p class='title_2'>$data[transaccion]</p></div>
                        </div>
            
                        <div style='margin-top:8px;' class='row'>
                            <div class='col s6 maxed'>   <h5 class='title'>Colonia: </h5></div>
                            <div class='col s6'>   <p class='title_2'>$data[colonia]</p></div>
                        </div>
            
                        <div style='margin-top:8px;' class='row'>
                            <div class='col s6 maxed'>  <h5 class='title'>Municipio: </h5></div>
                            <div class='col s6'> <p class='title_2'>$data[municipio]</p></div>
                        </div>
            
                        <div style='margin-top:8px;' class='row'>
                            <div class='col s6 maxed'>  <h5 class='title'>Departamento: </h5></div>
                            <div class='col s6'>  <p class='title_2'>$data[departamento]</p></div>
                        </div>
            
                        <div style='margin-top:8px;' class='row'>
                            <div class='col s6 maxed'>  <h5 class='title'>Terreno: </h5></div>
                            <div class='col s6'> <p class='title_2'>$data[terreno] v2</p></div>
                        </div>

                        <div style='margin-top:8px;' class='row'>
                            <div class='col s6 maxed'> <h5 class='title'>Construcción: </h5></div>
                            <div class='col s6'>   <p class='title_2'>$data[construccion] m2</p></div>
                        </div>

                        <div style='margin-top:8px;' class='row'>
                            <div class='col s6 maxed'>  <h5 class='title'>Niveles: </h5></div>
                            <div class='col s6'><p class='title_2'>$data[niveles] Nivel/es</p></div>
                        </div>
                            
                        <div style='margin-top:8px;' class='row'>
                            <div class='col s6 maxed'>  <h5 class='title'>Habitaciones: </h5></div>
                            <div class='col s6'> <p class='title_2'>$data[habitaciones] Habitacion/es</p></div>
                        </div>
                                
                            
                        <div style='margin-top:8px;' class='row'>
                            <div class='col s6 maxed'>  <h5 class='title'>Baños: </h5></div>
                            <div class='col s6'> <p class='title_2'>$data[baños] Baño/s</p></div>
                        </div>
                                    
                        <div style='margin-top:8px;' class='row'>
                            <div class='col s6 maxed'>  <h5 class='title'>Cochera: </h5></div>
                            <div class='col s6'> <p class='title_2'>$data[cochera] Vehiculo/s</p></div>
                        </div>

                    </div>
                </div>
                <!-- Descripción del anuncio -->
                <div class='row'>
                    <div class='col s12'> 
                        <h5 class='title-le'>Descripción: </h5>
                        <p class='title_'>$data[descripcion]</p>
                        <h5 class='title-le'>Amenidades:</h5>
                        <p class='title_'>$data[amenidades]</p>
                    </div>
                </div>         
            </div>
        </div>
    ");
    ?>
        <!-- DIV DERECHO -->
        <div class='col s12 m12 l3'>
        <div class='col s12 m12 l12' style='overflow:hidden'>
        <div class='col s6 l12'><center><img id='banerlat' width='90%' height='auto' src='../web/img/banners/sq_banner.jpg'></center></div>
        <div class='col s6 l12'><center><img id='banerlat' width='90%' height='auto' src='../web/img/banners/sq_banner.jpg'></center></div>

                </div>
        </div>
  
  
    </div>
     <!-- Aqui incluyo el codigo php de random -->
 <?php
    include('complemento_random/propiedades_venta.php');
    ?>
</div>

</div>