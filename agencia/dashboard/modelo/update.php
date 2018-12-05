<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar modelo de vehiculo");
require_once("../../app/controllers/dashboard/modelo/update_controller.php");
Page::templateFooter();
?>