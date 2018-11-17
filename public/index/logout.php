<?php
require_once("../../app/views/public/templates/page2.class.php");
Page::templateHeader("Cerrar sesión");
require_once("../../app/controllers/public/index/logout_controller.php");
Page::templateFooter();
?>