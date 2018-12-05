<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear categoría");
require_once("../../app/controllers/dashboard/categoria/create_controller.php");
Page::templateFooter();
?>