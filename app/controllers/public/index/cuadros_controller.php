<?php
require_once("../../app/models/cuadro_comparativo.class.php");
try{
	$cuadro = new Cuadro_Comparativo;

    $data = $cuadro->getCuadrosPublic($_SESSION['id_prospecto_p']); 
    $data2 = $cuadro->getCantCuadrosPublic($_SESSION['id_prospecto_p']);

    $data3 = $cuadro->getCuadrosPublic2($_SESSION['id_prospecto_p']);
    $data4 = $cuadro->getCantCuadrosPublic2($_SESSION['id_prospecto_p']);


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


    $cant2 = $data4['m2'];
    if($cant2 == 1){
        $long2 = 12;
    }else if($cant2 == 2){
        $long2 = 6;
    }else if($cant2 == 3){
        $long2 = 4;
    }else if($cant2 == 4){
        $long2 = 3;
    }else if($cant2 == 5){
        $long2 = 4;
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