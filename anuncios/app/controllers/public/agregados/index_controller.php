<?php

require_once('../app/models/citas.class.php');
try
{
    $cita = new Citas;
    if(isset($_GET['id']) && $_GET['id'] != 0 && $_GET['id'] != null)
    {
        if(isset($_GET['cat']))
        {
            if($_GET['cat'] != 0 && $_GET['cat'] != null)
            {
                $categoria = $_GET['cat'];       
                require_once('../app/views/public/producto/calendario_view.php');
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
    
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}

?>