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
    if(isset($_GET['id']))
    {
        $url = $_SESSION['url'];
        if($url == 'vehiculos_detalle_v.php')
        {
            $categoria = 1;
        }
        if($url == 'pagina.php')
        {
            $categoria = 2;
        }
        require_once('../app/views/public/producto/enviar_mensaje_view.php');
    }
    else
    {
        print("
        <script>
            location.href = 'index.php';
        </script>
        ");
    }

    if(isset($_POST['enviar']))
    {
        $datos_usuario = '';
        $_POST = $contacto->validateForm($_POST);
        if($_POST['nombres'] != '')
        {
            if($_POST['apellidos'] != '')
            {
                $contacto->setNombres($_POST['nombres'].' '.$_POST['apellidos']);
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
                throw new Exception('Ingrese sus apellidos');
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