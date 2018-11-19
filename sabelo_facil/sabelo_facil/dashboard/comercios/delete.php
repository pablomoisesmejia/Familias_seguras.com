<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar Comercio");
require_once("../../app/controllers/dashboard/comercios/delete_controller.php");
Page::templateFooter();
?>