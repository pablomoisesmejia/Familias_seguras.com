<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar categoría");
require_once("../../app/controllers/dashboard/categoria/delete_controller.php");
Page::templateFooter();
?>