<?php

require_once("app/models/database.class.php");
require_once("app/helpers/validator.class.php");
require_once("app/helpers/component.class.php");


class Page extends Component{
	//este es el header
	public static function templateHeader_login($title){
	    //session_start();
		ini_set('date.timezone','America/El_Salvador');
        print("
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <title>Login V1</title>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
        <!--===============================================================================================-->	
            <link rel='icon' type='image/png' href='fs_ico.ico'/>
        <!--===============================================================================================-->
            <link rel='stylesheet' type='text/css' href='framework/vendor/bootstrap/css/bootstrap.min.css'>
        <!--===============================================================================================-->
            <link rel='stylesheet' type='text/css' href='framework/fonts/font-awesome-4.7.0/css/font-awesome.min.css'>
        <!--===============================================================================================-->
            <link rel='stylesheet' type='text/css' href='framework/vendor/animate/animate.css'>
        <!--===============================================================================================-->	
            <link rel='stylesheet' type='text/css' href='framework/vendor/css-hamburgers/hamburgers.min.css'>
        <!--===============================================================================================-->
            <link rel='stylesheet' type='text/css' href='framework/vendor/select2/select2.min.css'>
        <!--===============================================================================================-->
            <link rel='stylesheet' type='text/css' href='framework/css/util.css'>
            <link rel='stylesheet' type='text/css' href='framework/css/main.css'>
        <!--===============================================================================================-->
        </head>
        <body>

			 ");
	}
	public static function templateHeader($title){
	    //session_start();
		ini_set('date.timezone','America/El_Salvador');
        print("

        <!DOCTYPE html>
        <html lang='es' class='no-js'>
            <head>
                <meta charset='UTF-8' />
                <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> 
                <meta name='viewport' content='width=device-width, initial-scale=1.0'> 
                <title>Familias seguras</title>
                <meta name='description' content='Ofertas y contacto ' />
                <meta name='keywords' content='css transforms, circular navigation, round navigation, circular menu, tutorial' />
                <meta name='author' content='Sara Soueidan for Codrops' />
                <link rel='icon' type='image/png' href='fs_ico.ico'/>
                
                <link rel='stylesheet' type='text/css' href='framework/css/normalize.css' />
                <link rel='stylesheet' type='text/css' href='framework/css/demo.css' />
                <link rel='stylesheet' type='text/css' href='framework/css/component1.css' />
          
                <script src='framework/js/modernizr-2.6.2.min.js'></script>
                <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        
        <script type='text/javascript'>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7243260-2']);
        _gaq.push(['_trackPageview']);
        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
        </script>
        
            </head>
            <body>
            <div class='container'>
            
			<!-- Top Navigation -->
			<div class='codrops-top clearfix navbar-fixed'>
				<a   style='color:black;' ><span>FS | Administación </span></a>
				<span class='right'><a class='codrops-icon codrops-icon-drop' style='color:black;'  href='index.php'><span>Cerrar sesión</span></a></span>
			</div>


			<div class='component'>
				<!-- Start Nav Structure -->
				<button class='cn-button' id='cn-button'>+</button>
				<div class='cn-wrapper' id='cn-wrapper'>
				    <ul>
				      <li><a href='#'><i class='material-icons'>add</i></a></li>
				      <li><a href='#'><i class='material-icons'>add</i></a></li>
				      <li><a href='#'><i class='material-icons'>add</i></a></li>
				      <li><a href='#'><i class='material-icons'>add</i></span></a></li>
				      <li><a href='#'><i class='material-icons'>add</i></a></li>
				     </ul>
				</div>
				<div id='cn-overlay' class='cn-overlay'></div>
				<!-- End Nav Structure -->
        </div>
        <div style='  background-color: rgb(237, 237, 237);'>
            

		
			 ");
	}

	//aqui ponemos el footer y sus referencias
	public static function templateFooter_login(){
		print("
        <!--===============================================================================================-->	
        <script src='framework/vendor/jquery/jquery-3.2.1.min.js'></script>
        <!--===============================================================================================-->
        <script src='framework/vendor/bootstrap/js/popper.js'></script>
        <script src='framework/vendor/bootstrap/js/bootstrap.min.js'></script>
        <!--===============================================================================================-->
        <script src='framework/vendor/select2/select2.min.js'></script>
        <!--===============================================================================================-->
        <script src='framework/vendor/tilt/tilt.jquery.min.js'></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <!--===============================================================================================-->
        <script src='framework/js/main.js'></script>
        </body>
        </html>
		");
	}

	//esta es la barra del lado
	public  static function templatefooter_basic(){
        print("



        </footer>
        </div><!-- /container -->
		<script src='framework/js/polyfills.js'></script>
		<script src='framework/js/demo1.js'></script>
        <!--Import jQuery before materialize.js-->
        <script type='text/javascript' src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
        <script type='text/javascript' src='framework/js/materialize.min.js'></script>
        <script type='text/javascript' src='framework/js/materialize.js'></script>
        <script type='text/javascript' src='framework/js/funciones.js'></script>

    
       
    </body>
    </html>
	
		");
	}
}
?>