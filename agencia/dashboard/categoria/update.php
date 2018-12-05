<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar categoría");
require_once("../../app/controllers/dashboard/categoria/update_controller.php");
Page::templateFooter();
?>