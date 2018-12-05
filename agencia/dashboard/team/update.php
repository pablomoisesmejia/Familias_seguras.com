<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar usuario");
require_once("../../app/controllers/dashboard/usuario/update_controller.php");
Page::templateFooter();
?>