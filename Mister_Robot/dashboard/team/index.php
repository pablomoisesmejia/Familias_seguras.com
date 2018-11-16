<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("GESTIÓN DE TEAMS");
require_once("../../app/controllers/dashboard/team/index_controller.php");
Page::templateFooter();
?>