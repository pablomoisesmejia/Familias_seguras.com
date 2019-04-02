<?php

require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");


class Page extends Component{
	//este es el header
	public static function templateHeader($title){
	    //session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
		<!DOCTYPE html>
		<html lang='es'>
		<head>
			<meta charset='UTF-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<meta http-equiv='X-UA-Compatible' content='ie=edge'>
			<title>Familias Seguras - $title</title>
		
			
			<link rel='stylesheet' href='../../web/fonts/roboto/letras.css'>
			<link rel='stylesheet' href='../../web/css/material_icons.css'>
			<link rel='stylesheet' href='../../web/css/materialize.css'>
			<link rel='stylesheet' href='../../web/css/public_style.css'>
			
		
		</head>
		<body onload='myFunction();'>
		<div id='loader'>
			<center>
			<img style='height: 100px;margin-top:100px; margin-top:38vh;' src='../../web/img/load/for_white.gif'>
		  <p>Espera un momento</p>
		</center>
		</div>
		
		<!-- ABRO BACKGROUND -->
		<div id='blackground_walls'>
			
			<!-- CIERRO BACKGROUND -->
		</div>
		
		<!-- ABRO BLACK_BACK -->
		<div id='black_back'>
			
			<!-- CIERRO BLACK_BACK -->
		</div>
		
		
		<header>
		
			<div id='header_bar'>
				<div id='lateral_conection'>
					
				</div>
				<a onclick='section_selected=3; show_info_section();' class='button_zero_flat'>Nosotros</a>
				<div class='divider_btn'> </div>   
				<a onclick='section_selected=2; show_info_section();' class='button_zero_flat'>Cotiza</a>    
				<div class='divider_btn'> </div>   
				<a onclick='section_selected=4; show_info_section();' class='button_zero_flat'>Contactanos</a>  
		
					<!-- -->
				<div style='' id='contactanos_header'>
				<div class='divider_btn'> </div>  
					<a id='tel_btn_header'  href='tel:+50322607851' class='lateral_btn_style_header'>
						<i class='material-icons prefix'>phone</i>   
					</a>
					
					<a href='https://www.facebook.com/familiasseguras/' class='lateral_btn_style_header'>
						<img class='lateral_icons' src='../../web/img/icon/fb_icon.png' alt='facebook'>
					</a>
					 
					<a id='wha_btn_header'  href='https://api.whatsapp.com/api/send?phone=50378633433&text=Me%20Gustaria%20obtener%20una%20cotizacion%20sobre%20los%20seguros%20que%20ofrecen.' class='lateral_btn_style_header'>
						<img class='lateral_icons' src='../../web/img/icon/wha_icon.png' alt='whatsapp'>
					</a>
				
				</div>
		
		
			</div>
			
		</header>
			 ");
	}
	public static function templateHeaderbasic($title){
	    //session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
		<!DOCTYPE html>
		<html lang='es'>
		<head>
			<meta charset='UTF-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<meta http-equiv='X-UA-Compatible' content='ie=edge'>
			<title>Familias Seguras - $title</title>
		
			
			<link rel='stylesheet' href='../../web/fonts/roboto/letras.css'>
			<link rel='stylesheet' href='../../web/css/material_icons.css'>
			<link type='text/css' rel='stylesheet' href='../../anuncios/web/css/materialize.min.css'/>
			<link rel='stylesheet' href='../../web/css/public_style.css'>
			<link type='text/css' rel='stylesheet' href='../../anuncios/web/css/public.css'/>
			
		
		</head>
		<header>
			<div class='navbar-fixed'>
				<nav class='purple'>
					<div class='nav-wrapper'>
						<div class='container'>
							<a href='index.php' class='brand-logo'><img src='../../anuncios/web/img/logo.png' style='margin:0; padding:0; margin-top:19px;' height='60'></a>
							<a href='#' data-activates='mobile' class='button-collapse'><i class='material-icons'>menu</i></a>
							<ul class='right hide-on-med-and-down'>
								<a class='btn_hdd_red' style='position:fixed; right:16%;' target='_blank' href='https://www.facebook.com/FamiliasSegurascom-322957035155872/'><img width='24px' src='../../anuncios/web/img/ico/fb_icon.png'></a>
								<a class='btn_hdd_red' style='position:fixed; right:13%;' target='_blank' href='https://www.instagram.com/familiasseguras/'><img width='24px' src='../../anuncios/web/img/ico/insta_icon.png'></a>
								<a class='btn_hdd_red' style=' filter:brightness(10); position:fixed; right:10%;'  href='../dashboard/account/login.php'><img width='24px' src='../../anuncios/web/img/ico/key.png'></a>

								<li><a class='btn_hdd' href='../../anuncios/public/cotiza_seguro.php'>Cotiza tu Seguro |</a></li>
								<li><a class='btn_hdd' href='../../anuncios/public/index.php'>Directorio |</a></li>
								<li><a class='btn_hdd' href='../../anuncios/public/vehiculos_v.php'>Vehiculos en venta |</a></li>
								<li><a class='btn_hdd' href='../../anuncios/public/propiedades_v.php'>Propiedades en Venta |</a></li>
								<li><a class='btn_hdd' style='margin-right:10px;' href='../public/propiedades_alqui.php'>Propiedades en Alquiler</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<ul class='side-nav' id='mobile'>
				<p id='menu_txt_side'>Menú</p>
				<li><a href='../../anuncios/public/cotiza_seguro.php'><i class='material-icons left'>attach_money</i>Cotiza tu Seguro</a></li>
				<li><a href='../../anuncios/public/index.php'><i class='material-icons left'>library_books</i>Directorio</a></li>
				<li><a href='../../anuncios/public/vehiculos_v.php'><i class='material-icons left'>directions_car</i>Vehiculos en Venta</a></li>
				<li><a href='../../anuncios/public/propiedades_v.php'><i class='material-icons left'>home</i>Propiedades en Venta</a></li>
				<li style='margin-bottom:20px;'><a href='../../anuncios/public/propiedades_alqui.php'><i class='material-icons left'>home</i>Propiedades en Alquiler</a></li>

				<a class='btn_hdd_r' style='filter:brightness(0.2);position:fixed; right:226px;' target='_blank' href='https://www.facebook.com/FamiliasSegurascom-322957035155872/'><img width='24px' src='../../anuncios/web/img/ico/fb_icon.png'></a>
				<a class='btn_hdd_r' style='filter:brightness(0.2);position:fixed; right:180px;' target='_blank' href='https://www.instagram.com/familiasseguras/'><img width='24px' src='../../anuncios/web/img/ico/insta_icon.png'></a>
				<a class='btn_hdd_r' style=' filter:brightness(1); position:fixed; right:136px;'  href='../../anuncios/dashboard/account/login.php'><img width='24px' src='../../anuncios/web/img/ico/key.png'></a>
			</ul>					
		</header>
		<main>
			 ");
	}

	//aqui ponemos el footer y sus referencias
	public static function templateFooter(){
		print("
		</main>
		<footer class='page-footer purple'>
			<div class='container'>				
				<div  class='left-align fot_lets' id=''>
					<a style='float:left' class='btn_hdd2' href='../dashboard/account/login.php'>Nosotros</a>
					<a style='float:left' class='btn_hdd2' href='../dashboard/account/register.php'>Servicios</a>
					<a style='float:left' class='btn_hdd2' href='../dashboard/account/register.php'>Publicidad</a>
					<a style='float:left' class='btn_hdd2' href='../dashboard/account/register.php'>Contactanos</a>
				</div>
				<div id='foottt' class='col s12 m6'>
					<img id='log_fot' width='270px;' class='responsive-img' src='../../anuncios/web/img/logo_gaos.png'>
				</div>
				<div class='row'>	<p id='allrights' >Todos los derechos reservados ©Familias Seguras</p></div>
			</div>			
		</footer>
			
			<script src='../../web/script/jquery-3.2.1.min.js'></script>
			<script src='../../web/script/sweetalert.min.js'></script>
		");
		$filename = basename($_SERVER['PHP_SELF']);
		if($filename == "seguro_de_vida.php")
		{
			print("
			<script src='../../web/script/js_seguro_vida.js'></script>
			");
		}
		else if($filename == "seguro_Medico.php")
		{
			print("
			<script src='../../web/script/js_seguro_medico.js'></script>
			");
		}
		else if($filename == "seguro_de_incendios.php")
		{
			print("
			<script src='../../web/script/js_seguro_incendio.js'></script>
			");
		}
		if($filename == "seguro_de_motores.php")
		{
			print("
			<script src='../../web/script/js_seguro_vehiculo.js'></script>
			");
		}
		if($filename != "create_usuario.php")
		{
			print("
			<script src='../../web/script/functions.js'></script>
			");
		}
		else
		{
			print("
			<script src='../../web/script/create_usuario.js'></script>
			");
		}
		print("
			
			<script src='../../web/script/materialize.min.js'></script>
			
			</body>
			</html> <!-- Aqui Cerramos la vita de la pagina -->
		");
	}

	//esta es la barra del lado
	public  static function templateLateralBar(){
		print("
		<div id='lateral_bar_style'>
		<div id='lateral_bar_space'></div>
		<a onclick='section_selected=1; show_info_section();' class='lateral_btn_style'>
			<i class='material-icons prefix'>home</i>
		</a>
		<div class='divider_btn_H'> </div>   
		<a onclick='section_selected=2; show_info_section();' class='lateral_btn_style'>
			<i class='material-icons prefix'>dashboard</i>
		</a>
		<div class='divider_btn_H'> </div>   
		<a onclick='section_selected=3; show_info_section();' class='lateral_btn_style'>
			<i class='material-icons prefix'>info</i>
		</a>
		<div class='divider_btn_H'> </div>   
		<a onclick='section_selected=4; show_info_section();' class='lateral_btn_style'>
			<i class='material-icons prefix'>message</i>   
		</a>
		<div class='divider_btn_H'> </div>  
	
		<!-- -->
		<div class='hide-on-large-only' id='contactanos_lateral'>
			<a id='tel_btn_lateral' href='tel:+50322607851' class='lateral_btn_style'>
				<i class='material-icons prefix'>phone</i>   
			</a>
			<div class='divider_btn_H'> </div>  
			<a href='https://www.facebook.com/familiasseguras/' class='lateral_btn_style'>
				<img class='lateral_icons' src='public/img/icon/fb_icon.png' alt='facebook'>
			</a>
			<div class='divider_btn_H'> </div>  
			<a id='wha_btn_lateral' href='whatsapp://send/?phone=50377280640&text=Me%20Gustaria%20obtener%20una%20cotizacion%20sobre%20los%20seguros%20que%20ofrecen.' class='lateral_btn_style'>
				<img class='lateral_icons' src='public/img/icon/wha_icon.png' alt='whatsapp'>
			</a>
			
			 <a href='https://www.instagram.com/' class='lateral_btn_style'>
						<img class='lateral_icons' src='public/img/icon/insta_icon.png' alt='instagram'>
					</a>
		
		</div>
	
	</div>
		");
	}
}
?>