<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar marca");
require_once("../../app/controllers/dashboard/marca/delete_controller.php");
Page::templateFooter();
?>