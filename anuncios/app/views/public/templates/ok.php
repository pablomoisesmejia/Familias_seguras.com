
			<html lang='es'>
			<head>
				<meta charset='utf-8'>
				<title>Familias Seguras - $title</title>
				<link type='text/css' rel='stylesheet' href='../../../../web/css/materialize.min.css'/>
				<link type='text/css' rel='stylesheet' href='../../../../web/css/material_icons.css'/>
				<link type='text/css' rel='stylesheet' href='../../../../web/css/public.css'/>
				<script type='text/javascript' src='../../../../web/js/sweetalert.min.js'></script>
				<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
			<body>
				<header>
					<div class='navbar-fixed'>
						<nav class='purple'>
							<div class='nav-wrapper'>
							
								<a href='index.php' class='brand-logo'><img src='../web/img/logo.png' style='margin-top:16px;' height='70'></a>
								<a href='#' data-activates='mobile' class='button-collapse'><i class='material-icons'>menu</i></a>
								<ul class='right hide-on-med-and-down'>
								
									<a class='btn_hdd_red' style='position:fixed; right:36px;' href='facebook.com'><img width='36px' src='../../../../web/img/ico/fb_icon.png'></a>
									<a class='btn_hdd_red' style='position:fixed; right:80px;' href='facebook.com'><img width='36px' src='../../../../web/img/ico/insta_icon.png'></a>

									<li><a class='btn_hdd' href='../dashboard/account/login.php'>Cotiza tu Seguro</a></li>
									<li><a class='btn_hdd' href='../dashboard/account/register.php'>Directorio</a></li>
									<li><a class='btn_hdd' href='../dashboard/account/register.php'>Vehiculos en venta</a></li>
									<li><a class='btn_hdd' href='../dashboard/account/register.php'>Propiedades en Venta</a></li>
									<li><a class='btn_hdd' style='margin-right:40px;' href='../dashboard/account/register.php'>Propiedades en Alquiler</a></li>
								</ul>

							</div>
						</nav>
					</div>
					<ul class='side-nav' id='mobile'>
						<li><a href='index.php'><i class='material-icons left'>view_module</i>Catalogo</a></li>
						<li><a href='../dashboard/account/login.php'><i class='material-icons left'>view_module</i>Inicia sesión</a></li>
						<li><a href='../dashboard/account/register.php'><i class='material-icons left'>view_module</i>Registrarse</a></li>

					</ul>
					
				</header>
				<center><div id='banner_top'>Banner 1250 x 200</div></center>
				<main>


                   <!-- codigo-->

        <div style="top:-100vh;" id='panel_cotis'>
            <div id='seguros_containerr'>
            <!-- BLOQUE DE SEGUROS -->
            <div  class="info_block_2">
                    
                    <h5 onclick="closetipscot();" class='backk'><i class='material-icons prefix'>arrow_back</i> Volver </h5>
                    <h5 class='men'>Solicitar Cotización </h5>
                    <div class="row" >
                    <a href="   ">
                        <div   id="contenedor_de_seguro"  class="col s6 m6" onmouseover="seg=1; change_etiquete();" onmouseout="seg=1; change_etiquete_back();">
                            <div class="icon_container_1"><img src="../web/img/ico/seg_medico.png" class="seguro_ico_1"></div>
                            <div class="info_seguro_prev">
                                <h3 class="seguro_title" style="color:black;">Seguros Médicos</h3>
                                <p class="seguro_descripcion" style="color:black;">Garantiza tu salud y la de tus seres queridos.</p>  
                            </div>
                            <p class="seguro_presiona">Presiona para solicitar tu cotización</p>
                            </a>
                        </div>
                        <a href="  ">
                        <div  id="contenedor_de_seguro"  class="col s6 m6" onmouseover="seg=2; change_etiquete();" onmouseout="seg=2; change_etiquete_back();">
                            <div class="icon_container_2"><img src="../web/img/ico/seg_vida.png" class="seguro_ico_2"></div>
                            <div class="info_seguro_prev">
                                <h3 class="seguro_title" style="color:black;">Seguros de Vida</h3>
                                <p class="seguro_descripcion" style="color:black;">Garantiza el bienestar de tus seres queridos en caso de fallecimiento</p>
                               
                                
                            </div>
                             <p class="seguro_presiona">Presiona para solicitar tu cotización.</p>
                        </div>

                        <a href="  ">
                        <div   id="contenedor_de_seguro"  class="col s6 m6" onmouseover="seg=3; change_etiquete();" onmouseout="seg=3; change_etiquete_back();">
                            <div class="icon_container_3"><img src="../web/img/ico/seg_incendio.png" class="seguro_ico_3"></div>
                            <div class="info_seguro_prev">
                                <h3 class="seguro_title" style="color:black;">Seguro de Incendios</h3>
                                <p class="seguro_descripcion" style="color:black;">Protege tu hogar y sus pertenencias con las mejores coberturas del mercado.</p>
                                </a>
                                
                            </div>
                            <p class="seguro_presiona">Presiona para solicitar tu cotización</p>
                        </div>
                        <a href="   ">
                         <div  id="contenedor_de_seguro"  class="col s6 m6" onmouseover="seg=4; change_etiquete();" onmouseout="seg=4; change_etiquete_back();">
                            <div class="icon_container_4"><img src="../web/img/ico/seg_auto.png" class="seguro_ico_4"></div>
                            <div class="info_seguro_prev">
                                <h3 class="seguro_title" style="color:black;">Seguro de Vehículos</h3>
                                <p class="seguro_descripcion" style="color:black;">Protege tu vehículo con la cobertura más amplia y el mejor servicio.</p>
                                </a>
                                
                            </div>
                             <p class="seguro_presiona">Presiona para solicitar tu cotización</p>
                        </div>

                    </div>    
                </div>
            </div>
        </div>


        <div style='padding-left:5%; padding-right:5%; width:100%' class='row'>
            <div class='col s12 m5 l4'>
                <div style='margin-top:22px;' class='row'>
                    
                    <h5 class='titles'>Titular > Titular de Seguros > Juan Perez</h5>

                    <div id='img_cont'>
                        <img  src='../../../../web/img/'>
                    </div>
                    
                        <p class='botom_img' >Juan Perez</p>
                        <p class='botom_img' >Agendar una cita</p>
                        <p onclick='opentipscot();' class='botom_img' >Solicitar una Cotización</p>
                        
                        
                </div>
        </div>


            <div class='col s12 m7 l5'>
                <div style='margin-top:42px;' class='row'>
                    <h5 class='title'>Nombre</h5>
                    <p class='title_2'>Juanito Perez Aldaña</p>
                </div>

                <div style='margin-top:12px;' class='row'>
                        <h5 class='title'>titulo</h5>
                        <p class='title_2'>Juanito Perez Aldaña texto texto texto texto texto texto texto o texto texto texto texto texto o texto texto texto texto texto</p>
                    </div>

                    <div style='margin-top:22px;' class='row'>
                        <h5 class='title'>titulo</h5>
                        <p class='title_2'>texto texto</p>
                    </div>

                        <div style='margin-top:22px;' class='row'>
                        <h5 class='title'>titulo</h5>
                        <p class='title_2'>describe describe describe</p>
                    </div>

                    <div style='margin-top:22px;' class='row'>
                            <h5 class='title'>titulo</h5>
                            <p class='title_2'>describe, texto texto texto texto</p>
                    </div>

                    <div style='margin-top:22px;' class='row'>
                            <h5 class='title'>titulo</h5>
                            <p class='title_2'>Juanito Perez Aldaña</p>
                    </div>

                   
            </div>


            <div class='col s12 m12 l2'>
                   <center> <div id='banner_side'>Banner 250 x 250</div></center>
                   <center> <div id='banner_side'>Banner 250 x 250</div></center>
            </div>
        </div>

        <!-- codigo-->

				
	
				</main>
				<footer class='page-footer purple'>
					
						<div style='padding-left:5%; padding-right:5%;'>
							<div style='float:left; margin-top:30px;' class='left-align'>
							
							<a style='float:left' class='btn_hdd2' href='../dashboard/account/login.php'>Nosotros</a>
							<a style='float:left' class='btn_hdd2' href='../dashboard/account/register.php'>Servicios</a>
							<a style='float:left' class='btn_hdd2' href='../dashboard/account/register.php'>Anunciate</a>
							<a style='float:left' class='btn_hdd2' href='../dashboard/account/register.php'>Contactanos</a>
							<font style='float-left' face='arial' size='2'>Todos los derechos reservados ©Familias Seguras</font>
								
							</div>
							<div style='float:right' class='right-align'>
								<img width='270px;' class='responsive-img' src='../../../../web/img/logo_gaos.png'>
							</div>
						</div>
					
				</footer>
				<script type='text/javascript' src='../../../../web/js/jquery-3.2.1.min.js'></script>
				<script type='text/javascript' src='../../../../web/js/materialize.min.js'></script>
				<script type='text/javascript' src='../../../../web/js/public.js'></script>
			</body>
			</html>
		