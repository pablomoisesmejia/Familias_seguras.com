<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
require_once("../../app/models/anuncio.class.php");
class Page extends Component{
	public static function templateHeader($title){
		session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
			<!DOCTYPE html>
			<html lang='es'>
			<head>
				<meta charset='utf-8'>
				<title>SabeloFacil - $title</title>
				<link type='text/css' rel='stylesheet' href='../../web/css/materialize.min.css'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/material_icons.css'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/public.css'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/css_materias.css'  media='screen,projection'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/edicion_de_header_publico.css'  media='screen,projection'/>
				<script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>

				<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>

			<body>
			 ");
			 if (!isset($_SESSION['tiempo']))
			 {
				   $_SESSION['tiempo']=time();
			 }
			else if (time() - $_SESSION['tiempo'] > 600) /*tiempo en segundos de la inactividad*/
			{
	 
				session_destroy();
				/* Aquí redireccionas a la url especifica */
				Page::showMessage(4,"sesion cerrada por inactividad","../cuenta/acceder.php");
				  
			}
			$_SESSION['tiempo']=time(); //Si hay actividad seteamos el valor al tiempo actual

			if(isset($_SESSION['id_cliente'])){

					print("
					
					<header id='header_pub'>
			
			

					<div class='row  header_sf navbar-fixed'>
					<nav class='header_sf '>
						<div class='col s12 m12 l12' id='margeneado'>
							<div class='col s12 m2' style=' margin-top:10px;>
							<a style='text-align:center;' href='../productos/index.php'><img class='responsive-img' id='logoli_b' src='../../web/img/logos/sabelofacil_n.png'  alt='pc'></a>
							<a href='../productos/index.php'><img class='responsive-img' id='logoli_m' src='../../web/img/logos/mini_n.png'  alt='pc'></a>
								
							</div>
							
					
							<div class='col s12 m9' id='' >
								<div class='blocky hide-on-small-only col s12'> 
								
								</div>
								<div class='col l8 left' id='buton_stand' style='margin-bottom:20px;'>
									<a class='btn_header_p' id='btn_T_A' href='../productos/index.php' >Inicio</a>
									<a class='btn_header_p' id='btn_T_A' href='../productos/sitio_acad.php'>Sitio Academico</a>
									<a class='btn_header_p' href='../cupones/index.php'>Cupones</a> 
								</div>
								
								<!-- Bloque de CINTA OPCIONES DE MATERIAS ACADEMICAS -->
								<div  class='s12 l6 right	' id='cinta_academica'>
									
									<a class='btn_menu_action' href='carrito.php' > Carrito</a> 
									<a class='dropdown-button btn_menu_action' data-activates='dropdown'><b>Cuenta : $_SESSION[nombre]</b></a>
									
									
										<ul id='dropdown' class='dropdown-content' style='border-radius: 14px;'>
											<li><a href='../cuenta/perfil.php'>Editar perfil</a></li>
											<li><a href='../cuenta/cambiar_contrasena.php'>Cambiar clave</a></li>
											<li><a href='../cuenta/ventas.php'>Compras realizadas</a></li>
											<li><a href='../cuenta/salir.php'>Cerrar Sesion</a></li>
										</ul>
									
									
									
								</div>
					
								 
					
							</div>
								
						</div>
						
						</nav>
						
						<div id='butons_bar'>
									<p class='btn_header_mini'   ><a class='linko' href='../productos/index.php' style='min-height:1.2cm;min-width:33.3%;left:0;top:0; background-color:rgba(0,0,0,0); position:absolute;'></a>Inicio</p>
									<p class='btn_header_mini'   ><a class='linko' href='../productos/Academico.php' style='min-height:1.2cm;min-width:33.3%;left:33.3%;top:0; background-color:rgba(0,0,0,0); position:absolute;'></a>Sitio Academico</p>
									<p class='btn_header_mini'   ><a class='linko' href='../productos/cupones.php' style='min-height:1.2cm;min-width:33.3%;left:66.6%;top:0; background-color:rgba(0,0,0,0); position:absolute;'></a>Cupones</p>
						</div> 
					</div>
					
					
					</header>
						<main>
					
					
					
					");
			}else{
				print("
				
				<header id='header_pub'>
			
			

				<div class='row  header_sf navbar-fixed'>
				<nav class='header_sf '>
					<div class='col s12 m12 l12' id='margeneado'>
						<div class='col s12 m2' style=' margin-top:10px;>
						<a style='text-align:center;' href='../productos/index.php'><img class='responsive-img' id='logoli_b' src='../../web/img/logos/sabelofacil_n.png'  alt='pc'></a>
						<a href='../productos/index.php'><img class='responsive-img' id='logoli_m' src='../../web/img/logos/mini_n.png'  alt='pc'></a>
							
						</div>
						
				
						<div class='col s12 m9' id='' >
							<div class='blocky hide-on-small-only col s12'> 
							
							</div>
							<div class='col l8 left' id='buton_stand' style='margin-bottom:20px;'>
								<a class='btn_header_p' id='btn_T_A' href='../cuenta/acceder.php' >Iniciar Sesión</a>
								<a class='btn_header_p' id='btn_T_A' onclick=''>Sitio Academico</a>
								<a class='btn_header_p' href='../cupones/index.php'>Cupones</a> 
							</div>
							
						
				
							 
				
						</div>
							
					</div>
					
					</nav>
					
					<div id='butons_bar'>
								<p class='btn_header_mini'   ><a class='linko' href='../cuenta/acceder.php' style='min-height:1.2cm;min-width:33.3%;left:0;top:0; background-color:rgba(0,0,0,0); position:absolute;'></a>Iniciar Sesión</p>
								<p class='btn_header_mini'   ><a class='linko' href='../productos/Academico.php' style='min-height:1.2cm;min-width:33.3%;left:33.3%;top:0; background-color:rgba(0,0,0,0); position:absolute;'></a>Sitio Academico</p>
								<p class='btn_header_mini'   ><a class='linko' href='../productos/cupones.php' style='min-height:1.2cm;min-width:33.3%;left:66.6%;top:0; background-color:rgba(0,0,0,0); position:absolute;'></a>Cupones</p>
					</div> 
				</div>
				
				
				</header>
					<main>
				
				
				");
			}
			 
			
		
		
	}

	public static function templateFooter(){
		print("
		
		</main>
		
		<div class=' back ' >

			
			<div class='container'>
			<div class='slider' >
				<ul class='slides'>
		");
		$anuncios = new Anuncio;


		$anuncios_d = $anuncios->getAnuncios();

		foreach($anuncios_d as $anuncios_dis){
				
		print("
							<li >
								<a href='$anuncios_dis[empresa_url]'>
								<img  src='../../web/img/ANUNCIOS/$anuncios_dis[imagen_url]' > <!-- random image -->
								<div class='caption center-align'>
								<h3>$anuncios_dis[nombre_anunciante]</h3>
								<h5 class='light grey-text text-lighten-3'>Descripcion </h5>
								</div>
								</a>
							</li>
							
				");
		}


						print("

					

						</ul>
					</div>
				  </div>
				
				</div>


				<footer   id='footer_pub'>
					<div class='container'>
						<div class='row'>
							<div class='col s12 m3 l3' style='padding-right:20px;'>
								<h5 id='des'>Sabelofacil</h5>
								<p class='grey-text text-lighten-4'>Los mejores productos a los mejores precios, el sitio perfecto para consulta de información y compra en línea.</p>
								<a class='btn_menu_action' style='color:white;'>Leer más</a> 
							</div>
							<div class='col s12 m3 l3'>
								<h5 id='des'>Contactanos</h5>
								<p class='grey-text text-lighten-4'>Sabelo_facil@gmail.com</p>
								<p class='grey-text text-lighten-4'>+503 2230-4875</p>
							</div>
							<div class='col s12 m3 l3'>
								<h5 id='des' style='white-space:pri; font-size:1.4em;'>¿Promocionate?</h5>
								<p class='grey-text text-lighten-4'>(Anuncios)</p>
								<p class='grey-text text-lighten-4'>Rellena un formulario con la informacion de tu empresa </p>
								<a href='../registros/formularioP.php'  class='btn_menu_action' style='color:white;'>Registrar Anuncio</a> 
							</div>
							<div class='col s12 m3 l3'>
								<h5 id='des' style='white-space:pri; font-size:1.4em;'>¿Promocionate?</h5>
								<p class='grey-text text-lighten-4'>(Cupones de Descuento)</p>
								<p class='grey-text text-lighten-4'>Rellena un formulario con la información y estaremos en contacto!</p>
								<a href='https://youtube.com'  class='btn_menu_action' style='color:white;'>Registrar comercio</a> 
							</div>
						</div>
					</div>
					
				</footer>
				<script type='text/javascript' src='../../web/js/jquery-3.2.1.min.js'></script>
				<script type='text/javascript' src='../../web/js/materialize.min.js'></script>
				<script type='text/javascript' src='../../web/js/public.js'></script>
				<script src='https://www.google.com/recaptcha/api.js'></script>
			</body>
			</html>
		");
	}
}
?>