<?php
require_once("../../app/models/comercios.class.php");
try{
	require_once("../../app/views/dashboard/Reportes/index_view.php");
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../Reportes/");
}
?>