<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar cliente");
require_once("../../app/controllers/dashboard/cliente/delete_controller.php");
Page::templateFooter();
?>