<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Ingresar nuevo tipo de usuario ");
require_once("../../app/controllers/dashboard/Tipo_usuario/create_controller.php");
Page::templateFooter();
?>