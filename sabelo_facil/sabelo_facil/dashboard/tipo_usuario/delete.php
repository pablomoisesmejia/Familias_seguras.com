<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar un tipo de usuario");
require_once("../../app/controllers/dashboard/Tipo_usuario/delete_controller.php");
Page::templateFooter();
?>