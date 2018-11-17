<?php

require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");


class Page extends Component{
	//este es el header
	public static function templateHeader($title){
	    session_start();
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
			<link rel='stylesheet' href='../../web/css/public_style2.css'>
			<script type='text/javascript' src='../../web/script/sweetalert.min.js'></script>
			
			
		
		</head>
		<body onload='myFunction();'>
		");

		if(isset($_SESSION['id_usuario_p'])){
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
				self::showMessage(3, "¡Debe iniciar sesión!", "../index/login.php");
				self::templateFooter();
				exit;
			}else{
				print("");
			}
        }

		
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
			<link rel='stylesheet' href='../../web/css/public_style.css'>
			
		
		</head>
		
			 ");
	}

	//aqui ponemos el footer y sus referencias
	public static function templateFooter(){
		print("
			<footer>
			
			</footer>
			<script type='text/javascript' src='../../web/script/jquery-3.2.1.min.js'></script>
			<script type='text/javascript' src='../../web/script/main.js'></script>
			<script type='text/javascript' src='../../web/script/inicializador.js'></script>
			<script type='text/javascript' src='../../web/script/materialize.min.js'></script>
			
		");
		$filename = basename($_SERVER['PHP_SELF']);
		if($filename == "Seguro_de_vida.php")
		{
			print("
			<script src='../../web/script/js_seguro_vida.js'></script>
			");
		}
		if($filename == "Seguro_Medico.php")
		{
			print("
			<script src='../../web/script/js_seguro_medico.js'></script>
			");
		}
		if($filename == "Seguro_de_incendios.php")
		{
			print("
			<script src='../../web/script/js_seguro_incendio.js'></script>
			");
		}
		if($filename == "Seguro_de_motores.php")
		{
			print("
			<script src='../../web/script/js_seguro_vehiculo.js'></script>
			");
		}
		print("
			<script src='../../web/script/functions.js'></script>
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