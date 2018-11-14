<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Primas");
require_once("../../app/controllers/dashboard/usuario/create_prima_controller.php");
Page::templateFooter();
?>