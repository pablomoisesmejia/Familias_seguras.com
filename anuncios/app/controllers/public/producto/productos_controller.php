<?php
require_once("../../../models/database.class.php");
require_once("../../../helpers/validator.class.php");
require_once("../../../models/producto.class.php");
try{
	$producto = new Producto;
	$anuncios = '';
	$filtro = '';
	$ordenar = '';

	if(isset($_POST['ordenar']))
    {
        $ordenar = $_POST['ordenar'];
    }

	if($producto->setCategoria($_GET['id']))
	{
		if($ordenar == '')
		{
			$anuncios = $producto->getCategoriaProductos('');
		}
		else
		{
			if($ordenar == 'na-z')
			{
				$anuncios = $producto->getCategoriaProductos(', nombre_anuncio ASC');
			}
			if($ordenar == 'nz-a')
			{
				$anuncios = $producto->getCategoriaProductos(', nombre_anuncio DESC');			
			}
			if($ordenar == 'reciente')
			{
				$anuncios = $producto->getCategoriaProductos(', id_anuncio ASC');
			}
			if($ordenar == 'antiguo')
			{
				$anuncios = $producto->getCategoriaProductos(', id_anuncio DESC');
			}
		}
		
	}
	echo json_encode($anuncios);
}
catch(Exception $error){
	echo json_encode($error->getMessage());
}
?>