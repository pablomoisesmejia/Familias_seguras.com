<?php
require_once('../app/models/contactos.class.php');
require_once('../app/models/vehiculos.class.php');
require_once('../app/models/propiedad.class.php');
try
{
    $categoria = 0;
    $contacto = new Contactos;
    $vehiculo = new Vehiculos;
    $propiedad = new Propiedad;
    if(isset($_GET['id']) && $_GET['id'] != 0 && $_GET['id'] != null)
    {
        if(isset($_GET['cat']))
        {
            if($_GET['cat'] != 0 && $_GET['cat'] != null)
            {
                $categoria = $_GET['cat'];       
                require_once('../app/views/public/producto/enviar_mensaje_view.php');
            }
            else
            {
                Page::showMessage(2, 'No se encontro la categoria del anuncio', 'index.php');
            }
        }
        else
        {
            Page::showMessage(2, 'No se encontro la categoria del anuncio', 'index.php');
        }
    }
    else
    {
        Page::showMessage(2, 'No se encontro el anuncio', 'index.php');
    }
    
    if(isset($_POST['enviar']))
    {
        $tipo = 2;//Esto verificar el tipo de correo ha enviar. tipo 1 es de cita y tipo 2 es de enviar mensaje
        $datos_usuario = '';
        $_POST = $contacto->validateForm($_POST);
        if($_POST['nombres'] != '')
        {
            $contacto->setNombres($_POST['nombres']);
            if(strlen($_POST['telefono']) == 8)
            {
                if($contacto->setTelefono($_POST['telefono']))
                {
                    if($contacto->setCorreo($_POST['correo']))
                    {
                        if($contacto->setMensaje($_POST['mensaje']))
                        {
                            if($categoria == 1)
                            {
                                $vehiculo->setIdVehiculo($_GET['id']);
                                $datos_usuario = $vehiculo->getCorreoUsuario();
                            }
                            if($categoria == 2)
                            {
                                $propiedad->setIdPropiedad($_GET['id']);
                                $datos_usuario = $propiedad->getCorreoUsuario();
                            }
                            $contacto->setIdUsuario($datos_usuario[0][0]);
                            if($contacto->createContacto())
                            {
                                require_once('../app/helpers/mensaje.php');
                            }
                            else
                            {
                                throw new Exception(Database::getException());
                            }
                        }
                        else
                        {
                            throw new Exception('Ingrese el mensaje para el vendedor');
                        }
                    }
                    else
                    {
                        throw new Exception('Ingrese un correo electrónico');
                    }
                }
                else
                {
                    throw new Exception('Ingrese un número de telefono');
                }
            }
            else
            {
                throw new Exception('Ingrese un número de telefono valido');
            }
        }
        else
        {
            throw new Exception('Ingrese sus nombres');
        }
        
    }
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}
?>