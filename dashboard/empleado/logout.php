<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Cerrar sesión");
require_once("../../app/controllers/dashboard/usuario/logout_controller.php");
Page::templateFooter();
?>