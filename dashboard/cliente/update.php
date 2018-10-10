<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar cliente");
require_once("../../app/controllers/dashboard/cliente/update_controller.php");
Page::templateFooter();
?>