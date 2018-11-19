<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar Cupones");
require_once("../../app/controllers/dashboard/cupon/index_controller.php");
Page::templateFooter();
?>