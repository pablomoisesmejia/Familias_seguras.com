<div class='container'>
    <div class='row'>
        <div class='col s12' style='overflow:hidden'>
        <?php
        print("
          
        
        <!-- codigo-->
        
                <div style='top:-100vh;' id='panel_cotis'>
                    <div id='seguros_containerr'>
                    <!-- BLOQUE DE SEGUROS -->
                    <div  class='info_block_2'>
                            
                            <h5 onclick='closetipscot();' class='backk'><i class='material-icons prefix'>arrow_back</i> Volver </h5>
                            <h5 class='men'>Solicitar Cotización </h5>
                            <div class='row' >
                            <a href='seguro_medico.php?correo=".$producto->getEmail()."&id=".$_GET['id']."'>
                                <div   id='contenedor_de_seguro'  class='col s6 m6' onmouseover='seg=1; change_etiquete();' onmouseout='seg=1;'>
                                    <div class='icon_container_1'><img src='../web/img/ico/seg_medico.png' class='seguro_ico_1'></div>
                                    <div class='info_seguro_prev'>
                                        <h3 class='seguro_title' style='color:black;'>Seguros Médicos</h3>
                                        <p class='seguro_descripcion' style='color:black;'>Garantiza tu salud y la de tus seres queridos.</p>  
                                    </div>
                                    <p class='seguro_presiona'>Presiona para solicitar tu cotización</p>
                                    </a>
                                </div>
                                <a href='seguro_de_vida.php?correo=".$producto->getEmail()."&id=".$_GET['id']."'>
                                <div  id='contenedor_de_seguro'  class='col s6 m6' onmouseover='seg=2; change_etiquete();' onmouseout='seg=2;'>
                                    <div class='icon_container_2'><img src='../web/img/ico/seg_vida.png' class='seguro_ico_2'></div>
                                    <div class='info_seguro_prev'>
                                        <h3 class='seguro_title' style='color:black;'>Seguros de Vida</h3>
                                        <p class='seguro_descripcion' style='color:black;'>Garantiza el bienestar de tus seres queridos en caso de fallecimiento</p>
                                       
                                        
                                    </div>
                                     <p class='seguro_presiona'>Presiona para solicitar tu cotización.</p>
                                </div>
        
                                <a href='seguro_de_incendios.php?correo=".$producto->getEmail()."&id=".$_GET['id']."'>
                                <div   id='contenedor_de_seguro'  class='col s6 m6' onmouseover='seg=3; change_etiquete();' onmouseout='seg=3;'>
                                    <div class='icon_container_3'><img src='../web/img/ico/seg_incendio.png' class='seguro_ico_3'></div>
                                    <div class='info_seguro_prev'>
                                        <h3 class='seguro_title' style='color:black;'>Seguro de Incendios</h3>
                                        <p class='seguro_descripcion' style='color:black;'>Protege tu hogar y sus pertenencias con las mejores coberturas del mercado.</p>
                                        </a>
                                        
                                    </div>
                                    <p class='seguro_presiona'>Presiona para solicitar tu cotización</p>
                                </div>
                                <a href='seguro_de_motores.php?correo=".$producto->getEmail()."&id=".$_GET['id']."'>
                                 <div  id='contenedor_de_seguro'  class='col s6 m6' onmouseover='seg=4; change_etiquete();' onmouseout='seg=4;'>
                                    <div class='icon_container_4'><img src='../web/img/ico/seg_auto.png' class='seguro_ico_4'></div>
                                    <div class='info_seguro_prev'>
                                        <h3 class='seguro_title' style='color:black;'>Seguro de Vehículos</h3>
                                        <p class='seguro_descripcion' style='color:black;'>Protege tu vehículo con la cobertura más amplia y el mejor servicio.</p>
                                        </a>
                                        
                                    </div>
                                     <p class='seguro_presiona'>Presiona para solicitar tu cotización</p>
                                </div>
        
                            </div>    
                        </div>
                    </div>
                </div>
        
        
                <div style=' width:100%' class='row'>
                    <div class='col s12 m5 l4'>
                        <div style='margin-top:22px;' class='row'>
                            
                            <h5 class='titles'><a href='index.php' id='btn_lines'>Directorio ></a> <a href='productos.php?id=7' id='btn_lines'>".$producto->getNombre_categoria()." ></a> ".$producto->getNombre()."</h5>
        
                            <div id='img_cont'>
                                <img width='100%' height='300' src='../web/img/productos/".$producto->getImagen()."'>
                            </div>
                            
                                <p class='botom_img_static' >".$producto->getNombre()."</p>");
                                if($producto->getPlan() == 3)
                                {
                                    print("<p class='botom_img' >Agendar una cita</p>
                                    <p onclick='opentipscot();' class='botom_img' >Solicitar una Cotización</p>");
                                }
                                
                        
                        print("
                        </div>
                </div>
        
        
                    <div class='col s12 m7 l5'>
                    
                        <div style='margin-top:48px;' class='row'>
                     
                        <div class='col s4 maxed'> <h5 class='title'>Nombre: </h5>  </div>
                        <div class='col s8'>   <p class='title_2'>".$producto->getNombre()."</p></div>
                          
                        </div>
        
                        <div style='margin-top:12px;' class='row'>
                        <div class='col s4 maxed'> <h5 class='title'>Categoria: </h5></div>
                        <div class='col s8'>   <p class='title_2'>".$producto->getNombre_categoria()."</p></div>
                            </div>
        
                            <div style='margin-top:22px;' class='row'>
                            <div class='col s4 maxed'>   <h5 class='title'>Credencial: </h5></div>
                            <div class='col s8'>   <p class='title_2'>".$producto->getNumeroidentidad()."</p></div>
                            </div>
        
                                <div style='margin-top:22px;' class='row'>
                                <div class='col s4 maxed'>  <h5 class='title'>Especialidad: </h5></div>
                                <div class='col s8'> <p class='title_2'>".$producto->getEspecialidad()."</p></div>
                            </div>
        
                            <div style='margin-top:22px;' class='row'>
                            <div class='col s4 maxed'>  <h5 class='title'>Experiencia: </h5></div>
                            <div class='col s8'>  <p class='title_2'>".$producto->getExperiencia()."</p></div>
                            </div>
        
                            <div style='margin-top:22px;' class='row'>
                            <div class='col s4 maxed'>  <h5 class='title'>Dirección: </h5></div>
                            <div class='col s8'> <p class='title_2'>".$producto->getDireccion().", ".$producto->getMunicipio().", ".$producto->getDepartamento()."</p></div>
                            </div>
                            <div style='margin-top:22px;' class='row'>
                            <div class='col s4 maxed'>  <h5 class='title'>Email: </h5></div>
                            <div class='col s8'><p class='title_2'>".$producto->getEmail()."</p></div>
                            </div>
                            ");
                            if($producto->getPlan() == 1)
                            {
                                print("
                                <div style='margin-top:22px;' class='row'>
                                <div class='col s4 maxed'>  <h5 class='title'>Teléfono: </h5></div>
                                <div class='col s8'> <p class='title_2'>".$producto->getTelFijo()."</p></div>
                                </div>
                                ");
                            }
                            if($producto->getPlan() == 2 || $producto->getPlan() == 3)
                            {
                                print("
                                <div style='margin-top:22px;' class='row'>
                                <div class='col s4 maxed'>  <h5 class='title'>Teléfono: </h5></div>
                                <div class='col s8'> <p class='title_2'>".$producto->getTelFijo()."</p></div>
                                </div>
                                <div style='margin-top:22px;' class='row'>
                                <div class='col s4 maxed'>  <h5 class='title'>Celular: </h5></div>
                                <div class='col s8'> <p class='title_2'>".$producto->getCelular()."</p></div>
                                </div>");
                            }
                            /*<div style='margin-top:22px;' class='row'>
                            <div class='col s4 maxed'>  <h5 class='title'>Teléfono: </h5></div>
                            <div class='col s8'> <p class='title_2'>".$producto->getCelular()." | ".$producto->getTelFijo()."</p></div>
                            </div>*/
                            
                            if($producto->getPlan() == 3)
                            {
                                print("
                                <div style='margin-top:22px;' class='row'>
                                <div class='col s4 maxed'>  <h5 class='title'>WebSite: </h5></div>
                                <div class='col s8'> <p class='title_2'>".$producto->getPaginaWeb()."</p></div>
                                </div>");
                            }

                    print("
                       
                    </div>
        
        
                    <div class='col s12 m12 l3'>
                           <center> <div id='banner_side'>Banner 250 x 250</div></center>
                           <center> <div id='banner_side'>Banner 250 x 250</div></center>
                    </div>
                </div>
        
                <!-- codigo-->
       
        ");
        ?>
        </div>
    </div>
</div>