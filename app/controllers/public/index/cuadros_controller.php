<?php
require_once("../../app/models/cuadro_comparativo.class.php");
try{
	$cuadro = new Cuadro_Comparativo;

    $data = $cuadro->getCuadrosPublic($_SESSION['id_prospecto_p']); 
    $data2 = $cuadro->getCantCuadrosPublic($_SESSION['id_prospecto_p']);

    $cant = $data2['m'];
    if($cant == 1){
        $long = 12;
    }else if($cant == 2){
        $long = 6;
    }else if($cant == 3){
        $long = 4;
    }else if($cant == 4){
        $long = 3;
    }else if($cant == 5){
        $long = 4;
    }

    if($data){
		require_once("../../app/views/public/index/cuadro_view.php");
	}else{
		require_once("../../app/views/public/index/cuadro_view.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../index/");
}
?>