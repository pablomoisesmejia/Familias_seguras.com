<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar materias");
require_once("../../app/controllers/dashboard/materia/index_controller.php");
Page::templateFooter();
?>