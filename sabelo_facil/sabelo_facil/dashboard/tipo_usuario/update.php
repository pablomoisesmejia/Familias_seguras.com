<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar tipo de usuario");
require_once("../../app/controllers/dashboard/Tipo_usuario/update_controller.php");
Page::templateFooter();
?>