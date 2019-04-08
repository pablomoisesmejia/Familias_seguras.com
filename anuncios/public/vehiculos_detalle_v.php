<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Vehiculos");
require_once("../app/controllers/public/vehiculos/detalle_controller.php");

Page::templateFooter();
?>