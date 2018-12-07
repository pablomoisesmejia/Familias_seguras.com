<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear Vehículos");
require_once("../../app/controllers/dashboard/vehiculos/create_controller.php");
Page::templateFooter();
?>