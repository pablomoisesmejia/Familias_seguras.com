<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar datos del directorio");
require_once("../../app/controllers/dashboard/directorio/update_controller.php");
Page::templateFooter();
?>