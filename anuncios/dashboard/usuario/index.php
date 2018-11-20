<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar usuarios");
require_once("../../app/controllers/dashboard/usuario/index_controller.php");
Page::templateFooter();
?>