<?php
require_once("../../app/models/banners.class.php");
try
{
	$banner = new Banners;

	$data = $banner->getBanners();
    if($data)
    {
		require_once("../../app/views/dashboard/anuncio/index_view.php");
    }
    else
    {
		Page::showMessage(4, "No tienes anuncios disponibles", "create.php");
	}
}
catch(Exception $error)
{
    Page::showMessage(2, $error->getMessage(), "../account/");
}
?>