<?php
require_once("../../app/views/public/templates/page.class.php");
Page::templateHeader("Login");
require_once("../../app/controllers/public/account/login_controller.php");
Page::templateFooter();
?>