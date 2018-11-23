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
							<div class='container'>
								<a href='index.php' class='brand-logo'><img src='../web/img/logo.png' height='60'></a>
								<a href='#' data-activates='mobile' class='button-collapse'><i class='material-icons'>menu</i></a>
								<ul class='right hide-on-med-and-down'>
								
									<li><a href='../dashboard/account/login.php'>Inscribirse en Directorio</a></li>
									<li><a href='../dashboard/account/register.php'>Contratar Publicidad</a></li>
								</ul>
							</div>
							</div>
						</nav>
					</div>
					<ul class='side-nav' id='mobile'>
						<li><a href='index.php'><i class='material-icons left'>view_module</i>Catalogo</a></li>
						<li><a href='../dashboard/account/login.php'><i class='material-icons left'>view_module</i>Inicia sesión</a></li>
						<li><a href='../dashboard/account/register.php'><i class='material-icons left'>view_module</i>Registrarse</a></li>

					</ul>
					
				</header>
				<main>
		");
		require_once("../app/views/public/sections/modals_view.php");
	}

	public static function templateFooter(){
		print("
				</main>
				<footer class='page-footer purple'>
					
						<div class='container'>
							<div class='left-align'>
								<font face='arial' size='2'>Todos los derechos reservados ©Familias Seguras</font>
							</div>
							<div class='right-align '>
								<img class='responsive-img' src='../web/img/logo_gaos.png' height='50'>
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