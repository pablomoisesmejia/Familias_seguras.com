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
			<title>Familias Seguras</title>
		
			
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
			
			<script src='../../web/script/jquery-3.2.1.min.js'></script>
			<script src='../../web/script/sweetalert.min.js'></script>
			<script src='../../web/script/js_seguro_vida.js'></script>
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