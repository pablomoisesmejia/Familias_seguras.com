<?php
require_once("../../app/models/database.class.php");
require_once("../app/helpers/validator.class.php");
require_once("../app/helpers/component.class.php");
class Page extends Component{
	public static function templateHeader($title){
		session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
			<!DOCTYPE html>
			<html lang='es'>
			<head>
				<meta charset='utf-8'>
				<title>Familias Seguras - $title</title>
				<link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css'/>
				<link type='text/css' rel='stylesheet' href='../web/css/material_icons.css'/>
				<link type='text/css' rel='stylesheet' href='../web/css/public.css'/>
				<script type='text/javascript' src='../web/js/sweetalert.min.js'></script>
				<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
			<body onload='verificar_telefono_o_pc();'>
				<header>
					<div class='navbar-fixed'>
						<nav class='purple'>
							<div class='nav-wrapper'>
							<div class='container'>
								<a href='index.php' class='brand-logo'><img src='../web/img/logo.png' style='margin:0; padding:0; margin-top:19px;' height='60'></a>
								<a href='#' data-activates='mobile' class='button-collapse'><i class='material-icons'>menu</i></a>
								<ul class='right hide-on-med-and-down'>
								
									<a class='btn_hdd_red' style='position:fixed; right:13%;' target='_blank' href='https://www.facebook.com/FamiliasSegurascom-322957035155872/'><img width='28px' src='../web/img/ico/fb_icon.png'></a>
									<a class='btn_hdd_red' style='position:fixed; right:10%;' target='_blank' href='https://www.instagram.com/familiasseguras/'><img width='28px' src='../web/img/ico/insta_icon.png'></a>

									<li><a class='btn_hdd' href='../public/cotiza_seguro.php'>Cotiza tu Seguro</a></li>
									<li><a class='btn_hdd' href='../public/index.php'>Directorio</a></li>
									<li><a class='btn_hdd' href='../public/vehiculos_v.php'>Vehiculos en venta</a></li>
									<li><a class='btn_hdd' href='../public/propiedades_v.php'>Propiedades en Venta</a></li>
									<li><a class='btn_hdd' style='margin-right:10px;' href='../public/propiedades_alqui.php'>Propiedades en Alquiler</a></li>
								</ul>
							</div>
							</div>
						</nav>
					</div>
					<ul class='side-nav' id='mobile'>
						<li><a href='../public/cotiza_seguro.php'><i class='material-icons left'>view_module</i>Cotiza tu Seguro</a></li>
						<li><a href='../public/index.php'><i class='material-icons left'>view_module</i>Directorio</a></li>
						<li><a href='../public/vehiculos_v.php'><i class='material-icons left'>view_module</i>Vehiculos en Venta</a></li>
						<li><a href='../public/propiedades_v.php'><i class='material-icons left'>view_module</i>Propiedades en Venta</a></li>
						<li><a href='../public/propiedades_alqui.php'><i class='material-icons left'>view_module</i>Propiedades en Alquiler</a></li>

					</ul>
					
				</header>
		
				<main>
				<div class='container'>
				<div id='banner_top'>Banner 1250 x 200</div></div>
		");
		require_once("../app/views/public/sections/modals_view.php");
	}

	

	public static function templateFooter(){
		print("
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
								<img width='270px;' class='responsive-img' src='../web/img/logo_gaos.png'>
							</div>
						</div>
					
				</footer>
				<script type='text/javascript' src='../web/js/jquery-3.2.1.min.js'></script>
				<script type='text/javascript' src='../web/js/materialize.min.js'></script>
				<script type='text/javascript' src='../web/js/public.js'></script>
			</body>
			</html>
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
			<title>Familias Seguras</title>
		
			

			<link rel='stylesheet' href='../../web/fonts/roboto/letras.css'>
			<link rel='stylesheet' href='../../web/css/material_icons.css'>
			<link rel='stylesheet' href='../../web/css/materialize.css'>
			<link rel='stylesheet' href='../web/css/public_style.css'>
			
		
		</head>
		
		");
	}
	public static function templateFooterBasic(){
		print("
			<footer>
			
			</footer>
			
			<script src='../web/js/jquery-3.2.1.min.js'></script>
			<script src='../web/js/sweetalert.min.js'></script>
		");
		$filename = basename($_SERVER['PHP_SELF']);
		if($filename == "seguro_de_vida.php")
		{
			print("
			<script src='../web/js/js_seguro_vida.js'></script>
			");
		}
		else if($filename == "seguro_medico.php")
		{
			print("
			<script src='../web/js/js_seguro_medico.js'></script>
			");
		}
		else if($filename == "seguro_de_incendios.php")
		{
			print("
			<script src='../web/js/js_seguro_incendio.js'></script>
			");
		}
		if($filename == "seguro_de_motores.php")
		{
			print("
			<script src='../web/js/js_seguro_vehiculo.js'></script>
			");
		}
		print("
			<script src='../web/js/cotizaciones.js'></script>
			<script src='../web/js/materialize.min.js'></script>
			
			</body>
			</html> <!-- Aqui Cerramos la vita de la pagina -->
		");
	}
}
?>