<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear producto");
require_once("../../app/controllers/dashboard/producto/create_controller.php");
Page::templateFooter();
?>