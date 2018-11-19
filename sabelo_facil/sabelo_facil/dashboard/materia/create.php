<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear materia");
require_once("../../app/controllers/dashboard/materia/create_controller.php");
Page::templateFooter();
?>