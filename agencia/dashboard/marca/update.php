<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar marca");
require_once("../../app/controllers/dashboard/marca/update_controller.php");
Page::templateFooter();
?>