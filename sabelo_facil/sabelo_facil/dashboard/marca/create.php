<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear marca");
require_once("../../app/controllers/dashboard/marca/create_controller.php");
Page::templateFooter();
?>