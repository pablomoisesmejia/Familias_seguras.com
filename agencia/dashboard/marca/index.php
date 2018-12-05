<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar marcas");
require_once("../../app/controllers/dashboard/marca/index_controller.php");
Page::templateFooter();
?>