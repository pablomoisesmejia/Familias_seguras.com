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
				<title>CoffeeCode - $title</title>
				<link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css'/>
				<link type='text/css' rel='stylesheet' href='../web/css/material_icons.css'/>
				<link type='text/css' rel='stylesheet' href='../web/css/public.css'/>
				<script type='text/javascript' src='../web/js/sweetalert.min.js'></script>
				<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
			<body>
				<header>
					<div class='navbar-fixed'>
						<nav class='green'>
							<div class='nav-wrapper'>
								<a href='index.php' class='brand-logo'><img src='../web/img/logo.png' height='60'></a>
								<a href='#' data-activates='mobile' class='button-collapse'><i class='material-icons'>menu</i></a>
								<ul class='right hide-on-med-and-down'>
									<li><a href='index.php'><i class='material-icons left'>view_module</i>Catalogo</a></li>
									<li><a href='../dashboard/account/login.php'><i class='material-icons left'>view_module</i>Inicia sesión</a></li>
									<li><a href='../dashboard/account/register.php'><i class='material-icons left'>view_module</i>Registrarse</a></li>
			
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
				<main>
		");
		require_once("../app/views/public/sections/modals_view.php");
	}

	public static function templateFooter(){
		print("
				</main>
				<footer class='page-footer green'>
					<div class='container'>
						<div class='row'>
							<div class='col s12 m6 l6'>
								<h5 class='white-text'>Nosotros</h5>
								<p>
									<blockquote><a href='#mision' class='modal-trigger white-text'><b>Misión</b></a> | <a href='#vision' class='modal-trigger white-text'><b>Visión</b></a> | <a href='#valores' class='modal-trigger white-text'><b>Valores</b></a></blockquote>
									<blockquote><a href='#terminos' class='modal-trigger white-text'><b>Términos y condiciones</b></a></blockquote>
								</p>
							</div>
							<div class='col s12 m6 l6'>
								<h5 class='white-text'>Contáctanos</h5>
								<p>
									<blockquote><a class='white-text' href='https://www.facebook.com/' target='_blank'><b>facebook</b></a> | <a class='white-text' href='https://twitter.com/' target='_blank'><b>twitter</b></a></blockquote>
									<blockquote><a class='white-text' href='https://www.instagram.com/' target='_blank'><b>instagram</b></a> | <a class='white-text' href='https://www.youtube.com/' target='_blank'><b>youtube</b></a></blockquote>
								</p>
							</div>
						</div>
					</div>
					<div class='footer-copyright'>
						<div class='container'>
							<span>© CoffeeCode, todos los derechos reservados.</span>
							<span class='grey-text text-lighten-4 right'>Diseñado con <b><a class='red-text text-accent-1' href='http://materializecss.com/' target='_blank'>Materialize</a></b></span>
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