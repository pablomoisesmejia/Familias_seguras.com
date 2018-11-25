<?php
require_once("../app/models/database.class.php");
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
			<body>
				<header>
					<div class='navbar-fixed'>
						<nav class='purple'>
							<div class='nav-wrapper'>
							
								<a href='index.php' class='brand-logo'><img src='../web/img/logo.png' style='margin-top:16px;' height='70'></a>
								<a href='#' data-activates='mobile' class='button-collapse'><i class='material-icons'>menu</i></a>
								<ul class='right hide-on-med-and-down'>
								
									<a class='btn_hdd_red' style='position:fixed; right:36px;' href='facebook.com'><img width='36px' src='../web/img/ico/fb_icon.png'></a>
									<a class='btn_hdd_red' style='position:fixed; right:80px;' href='facebook.com'><img width='36px' src='../web/img/ico/insta_icon.png'></a>

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
}
?>