<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestión de venta de autos");
require_once("../../app/controllers/dashboard/autos/index_controller.php");
Page::templateFooter();
?>