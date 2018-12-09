<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/imagenes_propiedad.class.php");
require_once("../../../helpers/utility.class.php");

try
{
    $resultado = 0;
    $excepcion = 0;

    $imagen_propiedad = new Imagen_propiedad;
    $imagen_propiedad->setIdPropiedad($_POST['id_vehiculo']);
    for($i = 0; $i<count($_FILES['archivo']['name']); $i++)
    {
        $extension = strtolower(pathinfo($_FILES['archivo']['name'][$i], PATHINFO_EXTENSION));
        $nombre = uniqid().".".$extension;
        if($imagen_propiedad->setNombreImagenProp($nombre))
        {
            if($imagen_propiedad->createImgPropiedad())
            {
                if(move_uploaded_file($_FILES['archivo']['tmp_name'][$i], $imagen_propiedad->getRuta().$nombre))
                {
                    
                }
                else
                {
                    $excepcion = 100;
                }
            }
            else
            {
                $excepcion = Database::getException();
            }
        }
        $resultado = 1;
    }

    if($resultado == 1)
    {
        $id[] = [$resultado];
        echo json_encode($id);
    }
    if($resultado == 0)
    {
        $errores[] = [$resultado, $excepcion];
        echo json_encode($errores);
    }
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}

?>