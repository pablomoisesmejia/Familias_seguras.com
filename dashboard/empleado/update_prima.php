<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar prima");
require_once("../../app/controllers/dashboard/usuario/update_prima_controller.php");
Page::templateFooter();
?>