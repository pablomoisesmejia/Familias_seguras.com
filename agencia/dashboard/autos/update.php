<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar datos del automovil");
require_once("../../app/controllers/dashboard/autos/update_controller.php");
Page::templateFooter();
?>