<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar producto");
require_once("../../app/controllers/dashboard/producto/update_controller.php");
Page::templateFooter();
?>