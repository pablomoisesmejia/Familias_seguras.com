<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Acceder");
require_once("../app/controllers/public/account/acceder_controller.php");
Page::templateFooter();
?>