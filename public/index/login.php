<?php
require_once("../../app/views/public/templates/page2.class.php");
Page::templateHeader("Iniciar sesión");
require_once("../../app/controllers/public/index/login_controller.php");
Page::templateFooter();
?>