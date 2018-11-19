<?php
require_once("../../app/views/public/templates/page.class.php");
Page::templateHeader("Recuperar contraseña");
require_once("../../app/controllers/public/account/recovery_password.php");
Page::templateFooter();
?>