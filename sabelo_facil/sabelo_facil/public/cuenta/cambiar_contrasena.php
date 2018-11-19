<?php
require_once("../../app/views/public/templates/page.class.php");
Page::templateHeader("Cambiar contraseña");
require_once("../../app/controllers/public/account/contrasena_controller.php");
Page::templateFooter();
?>