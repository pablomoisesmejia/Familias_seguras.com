<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Iniciar sesión");
require_once("../../app/controllers/dashboard/usuario/login_controller.php");
Page::templateFooter();
?>