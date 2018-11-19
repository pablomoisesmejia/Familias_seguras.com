<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar cupon");
require_once("../../app/controllers/dashboard/cupon/update_controller.php");
Page::templateFooter();
?>