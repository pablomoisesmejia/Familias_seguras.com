<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar clientes");
require_once("../../app/controllers/dashboard/cliente/index_controller.php");
Page::templateFooter();
?>