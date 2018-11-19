<?php
require_once("../../app/views/public/templates/page.class.php");
Page::templateHeader("Cerrar sesión");
require_once("../../app/controllers/public/account/logout_controller.php");
Page::templateFooter();
?>