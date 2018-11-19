<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar Comercios");
require_once("../../app/controllers/dashboard/comercios/index_controller.php");
Page::templateFooter();
?>