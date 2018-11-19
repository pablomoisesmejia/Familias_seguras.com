<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar comercios");
require_once("../../app/controllers/dashboard/comercios/update_controller.php");
Page::templateFooter();
?>