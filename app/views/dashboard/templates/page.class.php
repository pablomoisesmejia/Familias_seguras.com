<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
require_once("../../app/models/usuarios.class.php");

class Page extends Component{
    public static function templateHeader($title){
        session_name("dashboard_familia_segura");
        session_start();
        ini_set("date.timezone", "America/El_Salvador");
        print("
            <!DOCTYPE html>
            <html lang='es'>
            <head>
                <meta charset='utf-8'>
                <title>Dashboard - $title</title>
                <link type='text/css' rel='stylesheet' href='../../web/css/materialize.css'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/material_icons.css'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/dashboard.css'/>
				<script type='text/javascript' src='../../web/script/sweetalert.min.js'></script>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
            </head>
            <body>
        ");

        if(isset($_SESSION['id_empleado_d'])){
            print("
			<header class='navbar-fixed'>
				<!-- Dropdown Structure -->
				<ul id='dropdown1' class='dropdown-content'>
					<li><a href='logout.php'>Cerrar sesi&oacute;n</a></li>
				</ul>
				<!-- Dropdown Structure Mobile -->
				<ul id='dropdown2' class='dropdown-content'>
					<li><a href='logout.php'>Cerrar sesi&oacute;n</a></li>
				</ul>
				
				<div class='navbar-fixed'>  
					<nav>
					<!--Navbar Color gris azulado-->
						<div class='nav-wrapper morado'>
						<img class='brand-logo' src='../../web/img/mipintura.png'>
						<a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
						<ul class='right hide-on-med-and-down'>
							<li><a href='#'>Prospectos</a></li>
							<li><a class='dropdown-button' href='#!' data-activates='dropdown1'>Bienvenido <b>$_SESSION[usuario_d]</b><i class='material-icons right'>arrow_drop_down</i></a></li>
						</ul>
						</div>
					</nav>
				</div>
			</header>

			<ul class='side-nav' id='mobile-demo'>
				<li><a href='#'>Prospectos</a></li>
				<li><a class='dropdown-button' href='#!' data-activates='dropdown2'>Bienvenido <b>$_SESSION[usuario_d]</b><i class='material-icons right'>arrow_drop_down</i></a></li>
			</ul>

			<main class=''>
            ");
        }else{
			print("
			<header>
				<div class='navbar-fixed'>  
					<nav>
					<!--Navbar Color gris azulado-->
						<div class='nav-wrapper morado'>
						<img class='brand-logo' src='../../web/img/mipintura.png'>
						</div>
					</nav>
				</div>
			</header>
				<main class=''>
			");
			$filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "register.php" && $filename != "correo.php"){
				self::showMessage(3, "¡Debe iniciar sesión!", "../empleado/login.php");
				self::templateFooter();
				exit;
			}else{
				print("");
			}
        }
    }

    public static function templateFooter(){
        print("
				</main>
				<footer class='page-footer morado'>
					<div class='container'>
						<div class='row'>
						<div class='col l6 s12'>
							<h5 class='white-text center-align'>Comun&iacute;cate con nosotros</h5>
								<p class='grey-text text-lighten-4 center-align'>Ll&aacute;manos</p>
								<p class='grey-text text-lighten-4 center-align'>(503) 2277-7777</p>
						</div>
						<div class='col l4 offset-l2 s12'>
							<h5 class='white-text'>Correo electr&oacute;nico</h5>
							<ul>
								<li><i class='small  material-icons'>email</i><a class='grey-text text-lighten-3 valign-wrapper'  href='https://mail.google.com/mail/u/0/#inbox?compose=new' target='_blanck'> desarrolladores@gmail.com</a></li>
							</ul>
						</div>
						</div>
					</div>
					<div class='footer-copyright'>
						<div class='container'>
							© 2018 Copyright DDS
						</div>
					</div>
				</footer>
				<!--Import jQuery before materialize.js-->
				<script type='text/javascript' src='../../web/script/jquery-3.2.1.min.js'></script>
				<script type='text/javascript' src='../../web/script/main.js'></script>
				<script type='text/javascript' src='../../web/script/inicializador.js'></script>
				<script type='text/javascript' src='../../web/script/materialize.min.js'></script>
			</body>
			</html>
		");
    }

}
?>