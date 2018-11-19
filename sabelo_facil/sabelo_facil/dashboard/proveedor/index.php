<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar proveedores");
require_once("../../app/controllers/dashboard/proveedor/index_controller.php");
Page::templateFooter();
?>