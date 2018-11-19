<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear cupon");
require_once("../../app/controllers/dashboard/cupon/create_controller.php");
Page::templateFooter();
?>