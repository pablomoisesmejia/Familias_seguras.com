<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar categorías");
require_once("../../app/controllers/dashboard/categoria/index_controller.php");
Page::templateFooter();
?>