<?php
require_once("../../app/models/banners.class.php");
require_once("../../app/helpers/utility.class.php");

try
{
    $banner = new Banners;
    
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/anuncio/create_view.php");
?>