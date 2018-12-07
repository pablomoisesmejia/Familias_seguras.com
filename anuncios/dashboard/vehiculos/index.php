<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar productos");
require_once("../../app/controllers/dashboard/vehiculos/index_controller.php");
Page::templateFooter();
?>