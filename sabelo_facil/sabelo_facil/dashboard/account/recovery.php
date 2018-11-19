<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Recuperar contraseña");
require_once("../../app/controllers/dashboard/account/recovery_password.php");
Page::templateFooter();
?>