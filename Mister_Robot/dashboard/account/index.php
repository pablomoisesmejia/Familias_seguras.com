<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("");
require_once("../../app/controllers/dashboard/account/index_controller.php");
Page::templateFooter();
?>