<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Registrar usuario");
require_once("../../app/controllers/dashboard/account/register_controller.php");
Page::templateFooter();
?>