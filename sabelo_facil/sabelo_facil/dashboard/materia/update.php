<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar materia");
require_once("../../app/controllers/dashboard/materia/update_controller.php");
Page::templateFooter();
?>