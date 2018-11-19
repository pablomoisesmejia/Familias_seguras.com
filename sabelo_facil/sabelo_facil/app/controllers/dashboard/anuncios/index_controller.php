<?php
require_once("../../app/models/anuncio.class.php");
try{
    $anuncio = new Anuncio;
    

	if(isset($_POST['buscar'])){
		$_POST = $anuncio->validateForm($_POST);
		$data = $anuncio->searchAnuncio($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resultados", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $anuncio->getAnuncios();
		}
	}else{
		$data = $anuncio->getAnuncios();
    }
    
	if($data){
		require_once("../../app/views/dashboard/anuncios/index_view.php");
	}else{
		Page::showMessage(3, "No hay anuncios disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>