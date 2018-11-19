<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar proveedor");
require_once("../../app/controllers/dashboard/proveedor/update_controller.php");
Page::templateFooter();
?>