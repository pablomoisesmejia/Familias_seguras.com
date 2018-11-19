<?php
require_once("../../app/models/anuncio.class.php");
try{
    $anuncio = new Anuncio;
    if(isset($_POST['crear'])){
        $_POST = $anuncio->validateForm($_POST);
        if($anuncio->setNombre_anunciante(($_POST['nombre']))){
            if($anuncio->setCorreo($_POST['correo'])){
                if($anuncio->setTelefono($_POST['telefono'])){
                    if($anuncio->setDireccion($_POST['direccion'])){
                        if($anuncio->setEmpresaurl($_POST['empresaurl'])){
                            if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                if($anuncio->setImagen($_FILES['archivo'])){
                                    if($anuncio->createAnuncio()){
                                        Page::showMessage(1, "Anuncio Creado", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception($anuncio->getImageError());
                                    }
                                }else {
                                    throw new Exception("Imagen incorrecta");
                                }
                        }else{
                            Page::showMessage(2,"URL no valido ",null);
                        }
                    }else{
                        Page::showMessage(2,"direccion no valida",null);
                    }
                }else{
                    Page::showMessage(2,"Telefono no valido",null);
                }
            }else{
                Page::showMessage(2,"Correo no valido",null);
            }
            
        }else{
         throw new Exception("Nombre incorrecto");
        }                    
           
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/anuncios/create_view.php");
?>