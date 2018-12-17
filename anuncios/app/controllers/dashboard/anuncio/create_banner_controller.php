<?php
require_once("../../app/models/banners.class.php");
require_once("../../app/helpers/utility.class.php");

try
{
    $banner = new Banners;
    if(isset($_POST['crear']))
    {
        $width = 0;
        $height = 0;


        if($_POST['tipo_banner'] == 1)
        {
            $width = 250;
            $height = 250;
        }
        if($_POST['tipo_banner'] == 2)
        {
            $width = 1250;
            $height = 400;
        }

        $_POST = $banner->validateForm($_POST);
        if($banner->setIdTipoBanner($_POST['tipo_banner']))
        {
            if($banner->setIdSeccion($_POST['seccion']))
            {
                $nombre_carpeta = $banner->getNombreCarpeta();
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
                                    if($banner->setImagen($_FILES['archivo'], $width, $height))
                                    {
                                        $ruta = $banner->getRuta().$nombre_carpeta[0].'/';
                                        if($banner->createBanner())
                                        {
                                            if(Utility::saveFile($_FILES['archivo'], $ruta, $banner->getImagen()))
                                            {
                                                Page::showMessage(1, "Se creo correctamente", "index.php");
                                            }
                                            else
                                            {
                                                Page::showMessage(3, "Se guardaron los datos pero no se guardó la imagen", "index.php");
                                            }
                                        }
                                        else
                                        {
                                            throw new Exception(Database::getException());
                                        }
                                    }
                                    else
                                    {
                                        throw new Exception($banner->getImageError());
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
            else
            {
                throw new Exception("Seleccione la sección del banner");
            }
        }
        else
        {
            throw new Exception("Seleccione el tipo del banner");
        }
    }
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/anuncio/create_view.php");
?>