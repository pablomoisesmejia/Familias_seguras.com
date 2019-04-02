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
                            <div class='row' id='blockbds' >
                            <a href='Seguro_Medico.php?correo=".$producto->getEmail()."&id=".$_GET['id']."'>
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
                            <div class='row' id='blockbdmall'>
                            
                            <a href='../../public/index/seguro_Medico.php'><div style='border-top: 1px solid white;' id='menu_movv' >Seguro Médico</div></a>
                            
                            <a href='../../public/index/seguro_de_motores.php'><div id='menu_movv' >Seguro de Vehiculos</div></a>
                            
                            <a href='../../public/index/seguro_de_incendios.php'><div id='menu_movv' >Seguro de Incendios</div></a>
                            
                            <a href='../../public/index/seguro_de_vida.php'><div id='menu_movv' >Seguro de Vida</div></a>
                            
                            </div>
                        </div>
                        
                    </div>
                
                </div>
        
        
                <div style=' width:100%' class=''>
                    <div class='col s12 m5 l4'>
                        <div style='margin-top:22px;' class='row'>
                            
                            <h5 class='titles'><a href='index.php' id='btn_lines'>Directorio ></a> <a href='productos.php?id=$_GET[cat]' id='btn_lines'>".$producto->getNombre_categoria()." ></a> ".$producto->getNombre()."</h5>
        
                            <div id='img_cont'>
                            <img width='100%' height='auto' src='../web/img/productos/".$producto->getImagen()."'>
                            </div>
                            
                            <p class='botom_img_static' >".$producto->getNombre()."");
                            if($producto->getPlan() != 1)
                            {
                                if($producto->getPlan() == 3)
                                {
                                    print("
                                    <a href='whatsapp://send/?phone=503".$producto->getWhatsapp()."' id='wha_btn_s'><img class='icoreds' src='../web/img/ico/wha_icon.png'></a>
                                    ");
                                }
                                print("
                                <a id='tel_btn' href='tel:+503".$producto->getCelular()."' class='icoreds'><i class='material-icons prefix'>phone</i></a>
                                <a target='_blank' href='".$producto->getFacebook()."' id='face_btn_s'><img class='icoreds' src='../web/img/ico/fb_icon.png'></a>
                                <a target='_blank' href='".$producto->getInstagram()."' id='insta_btn_s'><img class='icoreds' src='../web/img/ico/insta_icon.png'></a></p>
                            ");
                            }
                            if($producto->getPlan() == 3)
                            {
                                print("<p class='botom_img'>Agendar una cita</p>");
                                if($producto->getNombre_categoria() == 'Asesoría de seguros')
                                {
                                    print("
                                    <p onclick='opentipscot();' class='botom_img' >Solicitar una Cotización</p>
                                    ");
                                }                            
                            }
                                
                        
                        print("
                        </div>
                </div>
        
        
                    <div class='col s12 m7 l5'>
                    
                        <div style='margin-top:48px;' class='row'>
                    
                        <div class='col s4 maxed'> <h5 class='title'>Nombre: </h5>  </div>
                        <div class='col s8'>   <p class='title_2' id='nombre'>".$producto->getNombre()."</p></div>
                        
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
                            </div>");

                            
                            if($producto->getPlan() == 3)
                            {
                                print("
                                <div style='margin-top:22px;' class='row'>
                                <div class='col s4 maxed'>  <h5 class='title'>Email: </h5></div>
                                <div class='col s8'><p class='title_2'> <a href='https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=".$producto->getEmail()."'>".$producto->getEmail()."</a></p></div>
                                </div>");
                            }
                            else
                            {
                                print("
                                <div style='margin-top:22px;' class='row'>
                                <div class='col s4 maxed'>  <h5 class='title'>Email: </h5></div>
                                <div class='col s8'><p class='title_2'>".$producto->getEmail()."</p></div>
                                </div>");
                            }
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
                                    <div class='col s2'> <p class='title_2' id='cel_numero'>".$producto->getCelular()."</p></div>
                                </div>
                                <div style='margin-top:22px;' class='row'>
                                    <div class='col s4 maxed'>  <h5 class='title'>Descargar vCard:  </h5></div>
                                    <div class='col s2><a title='Descargar vCard' id='vcard'><img src='../web/img/icon/vcard_icon.png' width='30px' alt='vCard'></a></div>
                                </div>
                                ");
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
                                <div class='col s8'> <p class='title_2'><a href='".$producto->getPaginaWeb()."'>".$producto->getPaginaWeb()."</a></p></div>
                                </div>");
                            }

                            /*print("
                            <div style='margin-top:22px;' class='row'>
                            <div class='col s4 maxed'>  <h5 class='title'>WebSite: </h5></div>
                            <div class='col s8'> <p class='title_2'><a href='".$Card->CrearteVcard($producto->getNombre(), $producto->getCelular())."'></a>Descargar Vcard</p></div>
                            </div>");*/
                    $banner = new Banners;
                    $seccion = 2;
                    $imagen1 = '';
                    $imagen2 = '';

                    $banner->setIdSeccion($seccion);
                    $banner->setIdTipoBanner(1);
                    $banners = $banner->getBannersPublic();
                    
                    if(count($banners) != 0)
                    {
                        for($i = 0; $i < 2; $i++)
                        {
                            $banner_aleatorio = array_rand($banners, 1);
                            $imagen = $banners[$banner_aleatorio]['nombre_carpeta'].'/'.$banners[$banner_aleatorio]['imagen'];
                            if($imagen1 == '')
                            {
                                $imagen1 = $imagen;
                            }
                            else
                            {
                                $imagen2 = $imagen;
                            }
                            unset($banners[$banner_aleatorio]);
                            $banners = array_values($banners);

                            if(count($banners) == 0)
                            {
                                $i = 1;
                            }
                        }     
                    }                
                    
                    if($imagen1 == '')
                    {
                        $imagen1 = 'sq_banner.jpg';
                    }
                    if($imagen2 == '')
                    {
                        $imagen2 = 'sq_banner.jpg';
                    }
                    print("
                    
                    </div>
        
        
                    <div class='col s12 m12 l3' style='padding-top:20px;'>
                        
                    <div class='col s6 l12'><center><img id='banerlat' width='90%' height='auto' src='../web/img/banners/$imagen1'></center></div>
                    <div class='col s6 l12'><center><img id='banerlat' width='90%' height='auto' src='../web/img/banners/$imagen2'></center></div>

                    </div>
                </div>
        
                <!-- codigo-->
    
        ");
        ?>
        
        </div>
    </div>
    <div class='row'>
        <div class='col l12 s12'>
            <h4 class='center'>Escribir Comentario</h4>
            <div class="input-field col s12 m6 l6">
                <input id="correo" type="email" class="validate">
                <label for="correo">Ingrese su correo electrónico</label>
            </div>
            <div class="input-field col l8 s12 m12">
                <textarea id="cometario" class="materialize-textarea"></textarea>
                <label for="cometario">Comentario</label>
            </div>
        </div>
        <div class='row'>
            <div class="col l4 m8 s12">              
                <a id="enviar_comentario" class="btn waves-effect waves-light purple">Enviar Comentario</a>
            </div>
        </div>
    </div>
</div>