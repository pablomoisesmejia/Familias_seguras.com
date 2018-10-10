<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar materia");
require_once("../../app/controllers/dashboard/materia/delete_controller.php");
Page::templateFooter();
?>