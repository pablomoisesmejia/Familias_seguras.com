<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear cliente");
require_once("../../app/controllers/dashboard/cliente/create_controller.php");
Page::templateFooter();
?>