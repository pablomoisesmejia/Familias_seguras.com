<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
require_once("../../app/models/tipo_usuario.class.php");
require_once("../../app/models/usuario.class.php");

require_once '../../app/libraries/PHPMailer/class.phpmailer.php';
require_once '../../app/libraries/PHPMailer/class.smtp.php';

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
				<link type='text/css' rel='stylesheet' href='../../web/css/sabeloflat.css'/>
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
	   else if (time() - $_SESSION['tiempo'] > 600) /*tiempo en segundos de la inactividad*/
	   {

		   session_destroy();
		   /* Aquí redireccionas a la url especifica */
		   Page::showMessage(4,"sesion cerrada por inactividad","../account/login.php");
		     
	   }
	   $_SESSION['tiempo']=time(); //Si hay actividad seteamos el valor al tiempo actual

	   	$sesionid = session_id();
	   	//echo("$sesionid"); 
		if(isset($_SESSION['ID_admin'])){
			print("
				<div id='menu_overlay' style='display:none;'>overlay</div>

				<div id='container_block' style='display:none;'>
					<div id='menu_plegable'style='display:none;'>
						<a id='return_btn' onclick='ocultar_panel_superior();'>Regresar</a>	
							<ul>

							");



						
							

								
									$tipousuario = new Tipo_usuario;
									if($tipousuario->setId($_SESSION['ID_tipousuario'])){
										if($tipousuario->select_tipousuarios_e()){
			
											if($tipousuario->get_pAdministradores() == 1){
												print("
												<li onmouseover='bal_over=1; show_info_baldosa();'><a class='baldosa' href='../usuario'><p class='plac_let'>A</p>Administradores</a></li>
												");
											} else if($tipousuario->get_pAdministradores() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "usuario" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "usuario" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pCategorias() == 1){
												print("
												<li onmouseover='bal_over=2; show_info_baldosa();'><a class='baldosa' href='../categoria'>	<p class='plac_let'>C</p>Categorías</a></li>
												");
											} else if($tipousuario->get_pCategorias() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "categoria" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
													exit();
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "categoria" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pProductos() == 1){
												print("
												<li onmouseover='bal_over=3; show_info_baldosa();'><a class='baldosa' href='../producto'>		<p class='plac_let'>P</p>Productos</a></li></a>
												");
											} else if($tipousuario->get_pProductos() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "producto" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "producto" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pComercios() == 1){
												print("
												<li onmouseover='bal_over=4; show_info_baldosa();'><a class='baldosa' href='../comercios'>	<p class='plac_let'>C</p>Comercios</a></li>
												");
											} else if($tipousuario->get_pComercios() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "comercios" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "comercios" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pMaterias() == 1){
												print("
												<li onmouseover='bal_over=5; show_info_baldosa();'><a class='baldosa' href='../materia'>		<p class='plac_let'>M</p>Materias</a></li>
												");
											} else if($tipousuario->get_pMaterias() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "materia" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "materia" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pProveedores() == 1){
												print("
												<li onmouseover='bal_over=6; show_info_baldosa();'><a class='baldosa' href='../proveedor'>	<p class='plac_let'>P</p>Proveedores</a></li>
												");
											} else if($tipousuario->get_pProveedores() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "proveedor" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "proveedor" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pMarcas() == 1){
												print("
												<li onmouseover='bal_over=7; show_info_baldosa();'><a class='baldosa' href='../marca'>		<p class='plac_let'>M</p>Marcas</a></li>
												");
											} else if($tipousuario->get_pMarcas() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "marca" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "marca" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pTipos_Usuarios() == 1){
												print("
												<li onmouseover='bal_over=8; show_info_baldosa();'><a class='baldosa' href='../tipo_usuario'>		<p class='plac_let'>T</p>Tipo de Usuario</a></li>
												");
											} else if($tipousuario->get_pTipos_Usuarios() == 0){
												print(" ");
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "tipo_usuario" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "tipo_usuario" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pPermisos() == 1){
												print("
												<li onmouseover='bal_over=10; show_info_baldosa();'><a class='baldosa' href='../permisos'>		<p class='plac_let'>P</p>Permisos</a></li>
												");
												
											} else if($tipousuario->get_pPermisos() == 0){
												print(" ");
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "permisos" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "permisos" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pClientes() == 1){
												print("
												<li onmouseover='bal_over=9; show_info_baldosa();'><a class='baldosa' href='../cliente'>		<p class='plac_let'>C</p>Clientes</a></li>
												");
											} else if($tipousuario->get_pClientes() == 0){
												print(" ");
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "cliente" ) {
													echo("$filename");
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "cliente" ) {
													echo("$filename");
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pEstadisticas() == 1){
												print("
												<li onmouseover='bal_over=10; show_info_baldosa();'><a class='baldosa' href='../Estadistica'>		<p class='plac_let'>E</p>Estadistica</a></li>
												");
											} else if($tipousuario->get_pEstadisticas() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "Estadistica" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "Estadistica" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
			
											if($tipousuario->get_pReportes() == 1){
												print("
												<li onmouseover='bal_over=11; show_info_baldosa();'><a class='baldosa' href='../Reportes'>		<p class='plac_let'>R</p>Reportes</a></li>
												");
											} else if($tipousuario->get_pReportes() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "Reportes" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "Reportes" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}

											if($tipousuario->get_pAnuncios() == 1){
												print("
												<li onmouseover='bal_over=11; show_info_baldosa();'><a class='baldosa' href='../anuncios'>		<p class='plac_let'>A</p>Anuncios</a></li>
												");
											} else if($tipousuario->get_pAnuncios() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "anuncios" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "anuncios" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}

											if($tipousuario->get_pAnuncios() == 1){
												print("
												<li onmouseover='bal_over=11; show_info_baldosa();'><a class='baldosa' href='../anuncios'>		<p class='plac_let'>A</p>Anuncios</a></li>
												");
											} else if($tipousuario->get_pAnuncios() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "anuncios" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "anuncios" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}

											if($tipousuario->get_pCupones() == 1){
												print("
												<li onmouseover='bal_over=11; show_info_baldosa();'><a class='baldosa' href='../cupones'>		<p class='plac_let'>CU</p>Cupones</a></li>
												");
											} else if($tipousuario->get_pCupones() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "cupones" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "cupones" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
											if($tipousuario->get_pVentas() == 1){
												print("
												<li onmouseover='bal_over=11; show_info_baldosa();'><a class='baldosa' href='../ventas'>		<p class='plac_let'>V</p>Ventas</a></li>
												");
											} else if($tipousuario->get_pVentas() == 0){
												print(" ");$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "ventas" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}else{
												$filename = basename(dirname($_SERVER['PHP_SELF']),"/");
												if ($filename == "ventas" ) {
													Page::showMessage(2, "Acceso Prohibido", "../account/index.php");
												}
											}
											
											
			
			
			
										}else{
											Page::showMessage(2,"Error al recuperar los datos","../account/login.php");
										}
									}else{
										Page::showMessage(2,"Porfavor inicie sesion 1","../account/login.php");
									}
								

							
						

						

							print("
							
							</ul>


							");

							print("
							<div id='sepline'> </div>
							<p id='info_baldosita'>Al pasar el puntero del mouse sobre una baldosa se mostrara una pequeña descripcion de lo que realiza la opción</p>
					</div>				
				</div>

				<header class='navbar-fixed'>
					<nav class='navpers'>
						<div class='nav-wrapper'>
							
						<a href='../account/' id='logo_page_btn' class='left'><img id='logo_page' src='../../web/img/logo.png' height='20'></a>
						
						
						<ul class=''>
								<p id='a_nav' href='#' data-activates='slide-out' class='button-collapse headersd'> Mi Perfil </p>
								<p id='a_nav_2' onclick='mostrar_panel_superior();'  class=' headersd lok'> Menú de opciones </p>
							</ul>
						
						</div>
					</nav>

				



					<ul style='color:black' id='slide-out' class='side-nav'>
							
					<div class='row' id='SIDE_contenedor_user'>
						<div id='head_sides' ><a style='color:black'>Volver</a></div>
						<div id='SIDE_cu_1' class='col s7 m7 l7'>
							<p class='negrita' id='nombre_user_ingresed'>$_SESSION[username]</p>
							<p class='negrita' id='tipo_user_ingresed'>Administrador</p>
							
							
							
							<div class='row' style='padding:0; margin:0; margin-bottom: -3px'>
								<a href='../account/password.php' class='opc_user_side'>Editar contraseña</a>
							</div>
							<a href='../account/logout.php' class='opc_user_side' style='margin-top:10px;'>Cerrar sesión</a>

							
							
						</div>

						<div id='SIDE_cu_2' class='col s5 m5 l5'>
						<img src='../../web/img/usuarios/$_SESSION[imagen_url]' id='imagen_side_user'>
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
								<p id='datos'>$_SESSION[nombre]</p>
								
							</div>
							<div class='col s6'>
								<a style='color:black'>Apellidos</a>
								<p  id='datos'>$_SESSION[apellido]</p>
							</div>
							<div class='col s12'>
								<a style='color:black'>Correo</a>
								<p  id='datos'>$_SESSION[correo]</p>
							</div>
							<div class='col s12'>
								<a style='color:black'>Direccion</a>
								<p  id='datos'>$_SESSION[direccion]</p>
							</div>
							<div class='col s12'>
								<a id='try'>Fecha de nacimiento</a>
								<p  id='datos'>$_SESSION[fechanac]</p>
							</div>
							
							<div class='col s12'>
								<a id='try'>Numero de identificacion</a>
								<p  id='datos'>$_SESSION[documento]</p>
							</div>
						</div>													
						
					
					</div>
					</ul>
				</header>
				
			
				<main id='main_principal'>
					<h3 id='title_flat' class='center-align'>$title</h3>
			");

		
		}else{
			print("
				<main class='container'>
			");
			$filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "register.php" && $filename != "recovery.php" && $filename != "verificacion2.php"){
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
		<a href='#!' id='sf_bottom_bar_text' >Sabelofacil Dashboard  |   2018</a>
		<a href='../../public/index.php' id='sf_bottom_bar_text_2' >Sitio Publico</a>
    </div>

</footer>
				<script type='text/javascript' src='../../web/js/jquery-3.2.1.min.js'></script>
				<script type='text/javascript' src='../../web/js/materialize.min.js'></script>
				<script type='text/javascript' src='../../web/js/dashboard.js'></script>
				<script src='https://www.google.com/recaptcha/api.js'></script>
			</body>
			</html>
		");
	}
}
?>