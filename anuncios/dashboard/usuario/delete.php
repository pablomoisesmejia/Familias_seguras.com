<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar usuario");
require_once("../../app/controllers/dashboard/usuario/delete_controller.php");
Page::templateFooter();
?>