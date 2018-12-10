<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Directorio");
require_once("../app/controllers/public/propiedades/detalle_controller.php");
Page::templateFooter();
?>