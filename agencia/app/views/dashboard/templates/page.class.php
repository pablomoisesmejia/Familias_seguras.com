<?php
session_start();
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");

class Page extends Component{
	public static function templateHeader($title){
		//
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
				<link type='text/css' rel='stylesheet' href='../../web/css/sabeloflat.css'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/public.css'/>
				<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
				<script type='text/javascript' src='../../web/js/Chart.bundle.js'></script>
				<script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
				<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
			<body id='black_body'>
		");

		
		if (!isset($_SESSION['tiempo']))
		 {
   			$_SESSION['tiempo']=time();
		 }
		else if (time() - $_SESSION['tiempo'] > 600) 
		{

			session_destroy();
			/* Aquí redireccionas a la url especifica */
			header("Location: ../account/login.php");
			die();  
		}
		$_SESSION['tiempo']=time(); //Si hay actividad seteamos el valor al tiempo actual

		if(isset($_SESSION['id_usuario'])){
			print("
				

				<div id='container_block' style='display:none;'>
					<div id='menu_plegable'style='display:none;'>
						<a id='return_btn' onclick='ocultar_panel_superior();'>Regresar</a>	
						
							
z
							<div id='sepline'> </div>
							<p id='info_baldosita'>Al pasar el puntero del mouse sobre una baldosa se mostrara una pequeña descripcion de lo se encuentra en este apartado</p>
								
							
					</div>				
				</div>

				<header  class='navbar-fixed'>
					<nav class='navpers'>
						<div class='nav-wrapper'>
							
						<a style='filter:brightness(0.3); padding-left:20px;' href='../account/' class='left'><img src='../../web/img/logo.png' height='20'></a>
							<ul class='right '>
							
							
								<a onclick='show_nav();' id='nicebtn'>Menú Principal</a>
								
							</ul>
						
						</div>
					</nav>

				



						<div style='color:black' id='sliout' class='side-dashav'>
							
						<div class='row' id='SIDE_contenedor_user'>
							<div id='head_sides' >
							<a  onclick='hide_nav();' id='nicebtn' >Volver</a>
							<img id='header_logs'  src='../../web/img/logo.png'></div>
							<div id='SIDE_cu_1' class='col s7 m7 l7'>
								<p class='negrita' id='nombre_user_ingresed'>$_SESSION[nombres_usuario]</p>
								<p class='negrita' id='tipo_user_ingresed'>Administrador</p>
								
								
								
								<div class='row' style='padding:0; margin:0; margin-bottom: -3px'>
									<a href='../account/password.php' class='opc_user_side'>Editar contraseña</a>
								</div>
								<a href='../account/logout.php' class='opc_user_side' style='margin-top:10px;'>Cerrar sesión</a>

								
								
							</div>

							<div id='SIDE_cu_2' class='col s5 m5 l5'>
							<img src='../../web/img/usuarios/person.png' id='imagen_side_user'>
							</div>
						</div>

						<div class='row' id='SIDE_notificaciones'>
							<h4 style='color:rgb(40,40,40); font-size:1.7em; '></h4>
							<p class='lbl_simply'></p>

							<div class='row'>
								<div class='col s1' id='colis1'>
								
								</div>
								<div class='col s1' id='colis2'>
								
								</div>
								<div class='col s10 right-align' id='colis3'>
								
								</div>
							</div>
							<div class='divider'></div>	
							<div class='row'>
								<div class='col s6'>
									<a style='color:black'>Nombres</a>
									<p id='datos'>$_SESSION[nombres_usuario]</p>
									
								</div>
								<div class='col s6'>
									<a style='color:black'>Apellidos</a>
									<p  id='datos'>$_SESSION[apellidos_usuario]</p>
								</div>
								<div class='col s12'>
									<a style='color:black'>Correo</a>
									<p  id='datos'>$_SESSION[correo_usuario]</p>
								</div>
								
							</div>													
							<div class='row'>
							<p class='negrita' id='nombre_user_ingresed'>Menú</p>
							<a href='../directorio'><p style='border-top: 1px solid rgba(128, 128, 128, 0.23);' class='btn_menu_lat'>Directorio</p></a>
							<a href='../autos'><p class='btn_menu_lat'>Vehiculos</p></a>
							<a href='../venta'><p class='btn_menu_lat'>Propiedades en Venta</p></a>
							<a href='../alquiler'><p class='btn_menu_lat'>Propiedades en Alquiler</p></a>
							<a href='../marca'><p class='btn_menu_lat'>Marcas Autos</p></a>
							<a href='../modelo'><p class='btn_menu_lat'>Modelos Autos</p></a>
							<div>
						
						</div>
						</div>
				</header>
				
			
				<main class='container'>
					<h3 id='title_flat' class='center-align'>$title</h3>
			");
		}else{
			print("
			
				<main class='container'>
			");
			$filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "register.php"){
				self::showMessage(3, "¡Debe iniciar sesión!", "../account/login.php");
				self::templateFooter();
				exit;
			}else{
				print("<!--<h3 id='title_flat' class='center-align'>$title</h3>-->");
			}
		}
	}

	public static function templateFooter(){
		print("
				</main>
				<footer id='fot_dis' >

    
       
    </div>
    
    <div class='sf_bottom_bar' id='foot_col'>
		<a href='#!' id='sf_bottom_bar_text' >Familias Seguras   |    Dashboard 2018</a>
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