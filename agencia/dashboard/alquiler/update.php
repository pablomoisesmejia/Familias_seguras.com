<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar datos de la propiedad");
require_once("../../app/controllers/dashboard/alquiler/update_controller.php");
Page::templateFooter();
?>