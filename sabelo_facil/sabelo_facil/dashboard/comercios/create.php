<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear comercios");
require_once("../../app/controllers/dashboard/comercios/create_controller.php");
Page::templateFooter();
?>