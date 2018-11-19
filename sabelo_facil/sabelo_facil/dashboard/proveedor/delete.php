<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar proveedor");
require_once("../../app/controllers/dashboard/proveedor/delete_controller.php");
Page::templateFooter();
?>