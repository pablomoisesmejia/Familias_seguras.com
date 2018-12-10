<?php
require_once("../../app/models/banners.class.php");
require_once("../../app/helpers/utility.class.php");

try
{
    $banner = new Banners;
    if(isset($_POST['crear']))
    {
        $_POST = $banner->validateForm($_POST);
        if($banner->setIdIntervaloFecha($_POST['intervalo']))
        {
            if($banner->setCantIntervaloFecha($_POST['cant_intervalo']))
            {
                if($banner->setFechaInicio($_POST['fecha_inicio']))
                {
                    if($banner->setHoraInicio($_POST['hora_inicio']))
                    {
                        if(is_uploaded_file($_FILES['archivo']['tmp_name']))
                        {
                            if($banner->setImagen($_FILES['archivo']))
                            {
                                if($banner->createBanner())
                                {
                                    if(Utility::saveFile($_FILES['archivo'], $banner->getRuta(), $banner->getImagen()))
                                    {
                                        Page::showMessage(1, "Se creo correctamente", "index.php");
                                    }
                                    else
                                    {
                                        Page::showMessage(3, "Producto creado pero no se guardó el archivo", "index.php");
                                    }
                                }
                                else
                                {
                                    throw new Exception(Database::getException());
                                }
                            }
                            else
                            {
                                throw new Exception($producto->getImageError());
                            }
                        }
                        else
                        {
                            throw new Exception("Seleccione una imagen");
                        }
                    }
                    else
                    {
                        throw new Exception('Seleccione la hora de inicio de su banner');
                    }
                }
                else
                {
                    throw new Exception('Seleccione la fecha de inicio de su banner');
                }
            }
            else
            {
                throw new Exception('Seleccione la cantidad de intervalos');
            }
        }
        else
        {
            throw new Exception('Seleccione un intervalo de fecha para mostrar su banner');
        }
    }
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/anuncio/create_view.php");
?>