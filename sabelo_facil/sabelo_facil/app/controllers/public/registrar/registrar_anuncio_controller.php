<?php
require_once("../../app/models/cliente.class.php");
try{

    if(isset($_POST['Enviarmensaje'])){

    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/public/registrar_anuncio/contactanos_view.php");


?>