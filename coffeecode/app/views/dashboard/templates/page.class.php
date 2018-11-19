<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
class Page extends Component{
	public static function templateHeader($title){
		session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
			<!DOCTYPE html>
			<html lang='es'>
			<head>
				<meta charset='utf-8'>
				<title>Dashboard - $title</title>
				<link type='text/css' rel='stylesheet' href='../../web/css/materialize.min.css'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/material_icons.css'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/dashboard.css'/>
				<script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
				<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
			<body>
		");
		if(isset($_SESSION['id_usuario'])){
			print("
				<header class='navbar-fixed'>
					<nav class='brown'>
						<div class='nav-wrapper'>
							<a href='../account/' class='brand-logo'><img src='../../web/img/logo.png' height='60'></a>
							<a href='#' class='button-collapse' data-activates='mobile'><i class='material-icons'>menu</i></a>
							<ul class='right hide-on-med-and-down'>
								<li><a href='../producto'><i class='material-icons left'>shop</i>Productos</a></li>
								<li><a href='../categoria'><i class='material-icons left'>shop_two</i>Categorías</a></li>
								<li><a href='../usuario'><i class='material-icons left'>group</i>Usuarios</a></li>
								<li><a href='#' class='dropdown-button' data-activates='dropdown'><i class='material-icons left'>verified_user</i>Cuenta: <b>$_SESSION[alias_usuario]</b></a></li>
							</ul>
							<ul id='dropdown' class='dropdown-content'>
								<li><a href='../account/profile.php'><i class='material-icons'>face</i>Editar perfil</a></li>
								<li><a href='../account/password.php'><i class='material-icons'>lock</i>Cambiar clave</a></li>
								<li><a href='../account/logout.php'><i class='material-icons'>clear</i>Salir</a></li>
							</ul>
						</div>
					</nav>
				</header>
				<ul class='side-nav' id='mobile'>
					<li><a href='../producto'><i class='material-icons'>shop</i>Productos</a></li>
					<li><a href='../categoria'><i class='material-icons'>shop_two</i>Categorías</a></li>
					<li><a href='../usuario'><i class='material-icons'>group</i>Usuarios</a></li>
					<li><a class='dropdown-button' href='#' data-activates='dropdown-mobile'><i class='material-icons'>verified_user</i>Cuenta: <b>$_SESSION[alias_usuario]</b></a></li>
				</ul>
				<ul id='dropdown-mobile' class='dropdown-content'>
					<li><a href='../account/profile.php'>Editar perfil</a></li>
					<li><a href='../account/password.php'>Cambiar clave</a></li>
					<li><a href='../account/logout.php'>Salir</a></li>
				</ul>
				<main class='container'>
					<h3 class='center-align'>$title</h3>
			");
		}else{
			print("
				<header class='navbar-fixed'>
					<nav class='brown'>
						<div class='nav-wrapper'>
							<a href='login.php' class='brand-logo'><i class='material-icons'>dashboard</i></a>
						</div>
					</nav>
				</header>
				<main class='container'>
			");
			$filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "register.php"){
				self::showMessage(3, "¡Debe iniciar sesión!", "../account/login.php");
				self::templateFooter();
				exit;
			}else{
				print("<h3 class='center-align'>$title</h3>");
			}
		}
	}

	public static function templateFooter(){
		print("
				</main>
				<footer class='page-footer brown'>
					<div class='container'>
						<div class='row'>
							<div class='col s12 m6'>
								<h5 class='white-text'>Dashboard</h5>
								<a class='white-text' href='mailto:dacasoft@outlook.com'><i class='material-icons left'>email</i>Ayuda</a>
							</div>
							<div class='col s12 m6'>
								<h5 class='white-text'>Enlaces</h5>
								<a class='white-text' href='../../public' target='_blank'><i class='material-icons left'>store</i>Sitio público</a>
							</div>
						</div>
					</div>
					<div class='footer-copyright'>
						<div class='container'>
							<span>© CoffeeCode, todos los derechos reservados.</span>
							<span class='white-text right'>Diseñado con <a class='red-text text-accent-1' href='http://materializecss.com/' target='_blank'><b>Materialize</b></a></span>
						</div>
					</div>
				</footer>
				<script type='text/javascript' src='../../web/js/jquery-3.2.1.min.js'></script>
				<script type='text/javascript' src='../../web/js/materialize.min.js'></script>
				<script type='text/javascript' src='../../web/js/dashboard.js'></script>
			</body>
			</html>
		");
	}
}
?>