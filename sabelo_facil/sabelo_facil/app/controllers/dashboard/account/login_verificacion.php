<?php
    require_once("../../app/models/usuario.class.php");
    require_once("../../app/libraries/GoogleAuthenticator-master/PHPGangsta/GoogleAuthenticator.php");
    try{

        $cliente = new Usuario;
        $ga = new GoogleAuthenticator();

           

            $name_projects = "Sabelo Facil";
            $sesionid = session_id();
	        echo("$sesionid"); 

        if($cliente->setId($_SESSION['ID_admin_oculto'])){
            $cliente->readUsuario();

            $llaveanterior = $cliente->getCodigo_auth();

            $email = $cliente->getCorreo();

            $qrCodeUrl = $ga->getQRCodeGoogleUrl($email, $llaveanterior,$name_projects);

                if(isset($_POST['verificar'])){

                    $result2 = $ga->getCode($llaveanterior);
                    $codigogoogle = $_POST['codigo_google'];

                    echo("<br> codigo a verificar es $result2 <br>");

                    echo("codigo de google $codigogoogle <br>");

                    echo("codigo proporcionado $result2 <br>");

                    if($codigogoogle == $result2){
                        
                        $result = $ga->verifyCode($llaveanterior,$result2 ,2);
                    
                        if ($result == 1) {
                            echo("<br> TAN *** $result");

                                
                                $_SESSION['ID_admin'] = $cliente->getId();
                                
                                if($cliente->setLogin_id($sesionid)){
                                    if($cliente->updatelogin_id()){
                                        Page::showMessage(1," Bienvenido $result", "index.php"); 
                                    }else{

                                    }
                                }else{

                                }
                            Page::showMessage(1," Bienvenido $result", "index.php");

                        } else if($result == 0) {
                            Page::showMessage(2,"error no se pudo proceder por un error ", null);
                        }
                        
                    }else{
                        Page::showMessage(2,"Codigo incorrecto ", null);
                    }

                    
                }
        
                
         




        }else{
            Page::showMessage(2, "No existe usuario a logiarse", null);
        }

    }catch(Exception $error){
        Page::showMessage(2, $error->getMessage(), null);
    }
    require_once("../../app/views/dashboard/account/login_verificacion_view.php");
?>