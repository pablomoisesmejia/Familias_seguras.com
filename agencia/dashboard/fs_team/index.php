<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar usuarios del team de Familias Seguras");
require_once("../../app/controllers/dashboard/fs/index_controller.php");
Page::templateFooter();
?>