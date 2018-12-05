<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestión de Directorio");
require_once("../../app/controllers/dashboard/directorio/index_controller.php");
Page::templateFooter();
?>