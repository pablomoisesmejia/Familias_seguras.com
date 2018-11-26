<main style="margin-left:56px">
   <?php require_once("lateral_bar.php");?>
   <div id="main_publico" class="row">
        <div class="col l5 hide-on-med-and-down" id="container_info_left">
             <!-- -->
             <!-- BLOQUE DE LOGO -->
             <div  class="info_block_left_logo">
                    <img id="large_logo_slider" src="../../web/img/logo/logo_only.png" alt="Seguros Familiares">
                </div>
                
            <div style="margin-top:14vh;" class="hide-on-med-and-down" id="contactanos_superior">
                <a id="tel_btn" href="tel:+50322607851" class="lateral_btn_style_bigs show-on-small">
                    <i class='material-icons prefix'>phone</i>   
                </a>
                
                <a href="https://www.facebook.com/familiasseguras/" class="lateral_btn_style_bigs">
                    <img class="lateral_icons" src="../../web/img/icon/fb_icon.png" alt="facebook">
                </a>
                
                <a id="wha_btn" href="whatsapp://send/?phone=50378633433&text=Me%20Gustaria%20obtener%20una%20cotizacion%20sobre%20los%20seguros%20que%20ofrecen." class="lateral_btn_style_bigs">
                    <img class="lateral_icons show-on-small" src="../../web/img/icon/wha_icon.png" alt="whatsapp">
                </a>
                
                  <a href="https://instagram.com/familiasseguras?utm_source=ig_profile_share&igshid=177f10lm01gj8" class="lateral_btn_style_bigs">
                    <img class="lateral_icons" src="../../web/img/icon/insta_icon.png" alt="facebook">
                </a>
            
            </div>
        </div>   
        <div class="col s9 l6" id="container_info_right">
            <!-- CONTENEDORES DE LA INFORMACIÓN -->

                <!-- BLOQUE DE LOGO -->
                <div  class="info_block_1">
                   
                    <h5>¡Bienvenido!<i class='material-icons prefix'>info</i> </h5>
                    
                    <p id="p_on_section">Para comenzar, puedes seleccionar una opción en el menu de la izquierda para ver la información.</p>
                </div>


                <!-- BLOQUE DE SEGUROS -->
                <div  class="info_block_2">
                    <h5>COTIZÁ TÚ SEGURO   <i class='material-icons prefix'>info</i> </h5>
                    <div class="row" >
                    <a href="seguro_medico.php">
                        <div   id="contenedor_de_seguro"  class="col s12 m6" onmouseover="seg=1; change_etiquete();" onmouseout="seg=1; change_etiquete_back();">
                            <div class="icon_container_1"><img src="../../web/img/icon/seg_medico.png" class="seguro_ico_1"></div>
                            <div class="info_seguro_prev">
                                <h3 class="seguro_title" style="color:black;">Seguros Médicos</h3>
                                <p class="seguro_descripcion" style="color:black;">Garantiza tu salud y la de tus seres queridos.</p>  
                            </div>
                            <p class="seguro_presiona">Presiona para solicitar tu cotización</p>
                            </a>
                        </div>
                        <a href="seguro_de_vida.php">
                        <div  id="contenedor_de_seguro"  class="col s12 m6" onmouseover="seg=2; change_etiquete();" onmouseout="seg=2; change_etiquete_back();">
                            <div class="icon_container_2"><img src="../../web/img/icon/seg_vida.png" class="seguro_ico_2"></div>
                            <div class="info_seguro_prev">
                                <h3 class="seguro_title" style="color:black;">Seguros de Vida</h3>
                                <p class="seguro_descripcion" style="color:black;">Garantiza el bienestar de tus seres queridos en caso de fallecimiento</p>
                               
                                
                            </div>
                             <p class="seguro_presiona">Presiona para solicitar tu cotización.</p>
                        </div>

                        <a href="seguro_de_incendios.php">
                        <div   id="contenedor_de_seguro"  class="col s12 m6" onmouseover="seg=3; change_etiquete();" onmouseout="seg=3; change_etiquete_back();">
                            <div class="icon_container_3"><img src="../../web/img/icon/seg_incendio.png" class="seguro_ico_3"></div>
                            <div class="info_seguro_prev">
                                <h3 class="seguro_title" style="color:black;">Seguro de Incendios</h3>
                                <p class="seguro_descripcion" style="color:black;">Protege tu hogar y sus pertenencias con las mejores coberturas del mercado.</p>
                                </a>
                                
                            </div>
                            <p class="seguro_presiona">Presiona para solicitar tu cotización</p>
                        </div>
                        <a href="seguro_de_motores.php">
                         <div  id="contenedor_de_seguro"  class="col s12 m6" onmouseover="seg=4; change_etiquete();" onmouseout="seg=4; change_etiquete_back();">
                            <div class="icon_container_4"><img src="../../web/img/icon/seg_auto.png" class="seguro_ico_4"></div>
                            <div class="info_seguro_prev">
                                <h3 class="seguro_title" style="color:black;">Seguro de Vehículos</h3>
                                <p class="seguro_descripcion" style="color:black;">Protege tu vehículo con la cobertura más amplia y el mejor servicio.</p>
                                </a>
                                
                            </div>
                             <p class="seguro_presiona">Presiona para solicitar tu cotización</p>
                        </div>

                    </div>    
                </div>

                <!-- BLOQUE DE INFO -->
                <div class="info_block_3">
                    <h5>SOBRE NOSOTROS  <i class='material-icons prefix'>info</i> </h5>
                    <h6 id="text_under_title">LA FORMA +  INTELIGENTE DE <br> ASEGURAR TU FAMILIA</h6>
                    <p id="p_on_section">Somos un sitio diseñado para brindar la mejor solucion en seguros para familias, con nosotros recibirás en menos de 24 horas la cotización del seguro de tu elección(médico hospitalario, vida o incendio), con almenos 3 compañias comparando sus costos y beneficios, para asi facilitar tu decisión</p>
                </div>

                  <!-- BLOQUE DE INFO -->
                  <div class="info_block_4">
                    
                    <h5  >CONTÁCTANOS  <i class='material-icons prefix'>mail</i> </h5>
                    <div id="info_block_noinputs">
                        <a onclick="form_contactanos_open();" class="lateral_btn_style_bigs_wi">
                        <i class='material-icons prefix'>mail</i>
                        </a>
                        <h6 id="text_under_title_c">EMAIL</h6>
                        <p id="p_on_section_c">info@FamiliasSeguras.com</p>

                        <h6 id="text_under_title_c">DIRECCIÓN</h6>
                        <p id="p_on_section_c">Edificio WTC T1, Local 201A San Salvador, El Salvador</p>

                        <h6 id="text_under_title_c">TELÉFONO</h6>
                        <p id="p_on_section_c">+(503) 2260.7851</p>
                    </div>
                    <div style="display: none;" id="info_block_forminputs">
                    <div class="row">
                            <a onclick="form_contactanos_close();" class="lateral_btn_style_bigs_wi">
                                    <i class='material-icons prefix'>arrow_back</i>
                            </a>
                            
                            <p id="p_on_section_c">Llena los campos siguientes para<br> poder comunicarnos contigo.</p>
                            
                        </div>

                                <form id="home_form">
                                    <div class='row'>
                                        <div class='input-field col s12 '>
                                            <input id="nombre_segv" type="text" class="validate" required/>
                                            <label class="" for="nombre_segv">Tu Nombre</label>
                                        </div>
                                    </div>
                                    
                                 
                                    <div class='row'>
                                        <div class='input-field col s12 '>
                                            <input id="email_segv" name="correo" type="email" class="validate" required/>
                                            <label class="" for="email_segv">Correo | Email</label>
                                        </div>
                                    </div>
                                </form>
                                <a id="" type="submit" class="waves-effect waves-light btn light-blue">Contactarme</a>
    
                         
                        </div>
                </div>

            <!-- FIN -->
        </div>       
   </div>

   <div id="main_publico_forms" class="row"> 
      
       
        <div class="col s12 m5">
        <a onclick="new_frm= new_frm-1;; regresar_un_paso();" id="return_btn">Volver</a>  
        <h1 class="form_title_big">Cotizaciones</h1>


        <div class="col s12">
            <ul class="progressbar">
                <li class="prog" id="paso_1">Paso 1</li>
                <li class="prog" id="paso_2">Paso 2</li> 
            </ul>
        </div>
            <div ><?php require_once("confirmations/email_enviado.php");?></div>
            <div class="row" style="margin-bottom:10px;"> 
        </div>
        
        <div id="frm_container">
            <div id="frm_seg_de_vida"><?php require_once("cotizaciones/seguro_de_vida.php");?></div>
            <div id="frm_seg_de_auto"><?php require_once("cotizaciones/seguro_de_auto.php");?></div>
            <div id="frm_seg_de_incendio"><?php require_once("cotizaciones/seguro_de_incendio.php");?></div>
            <div id="frm_seg_medico"><?php require_once("cotizaciones/seguro_medico.php");?></div>
            <div ><?php require_once("cotizaciones/personal_data.php");?></div>
        </div>
        </div>
        <div class="col s12 m7 hide-on-small-only">
            <img id="large_logo_slider_frm" src="../../web/img/logo/logo_large.png" alt="Seguros Familiares">
        </div>
     
   </div>



</main>