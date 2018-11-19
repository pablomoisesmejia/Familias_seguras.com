<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Tipos de usuario");
require_once("../../app/controllers/dashboard/Tipo_usuario/index_controller.php");
Page::templateFooter();
?>