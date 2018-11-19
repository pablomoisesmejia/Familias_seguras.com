<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar cupon");
require_once("../../app/controllers/dashboard/cupon/delete_controller.php");
Page::templateFooter();
?>