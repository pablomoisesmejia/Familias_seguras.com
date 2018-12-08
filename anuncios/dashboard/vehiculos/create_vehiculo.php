<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear Vehículos");
require_once("../../app/views/dashboard/vehiculos/create_view.php");
Page::templateFooter();
?>