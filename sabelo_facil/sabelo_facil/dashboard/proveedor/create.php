<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear proveedor");
require_once("../../app/controllers/dashboard/proveedor/create_controller.php");
Page::templateFooter();
?>