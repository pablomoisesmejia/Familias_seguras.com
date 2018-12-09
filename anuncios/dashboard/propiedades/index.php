<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar Propiedades");
require_once("../../app/controllers/dashboard/propiedades/index_controller.php");
Page::templateFooter();
?>