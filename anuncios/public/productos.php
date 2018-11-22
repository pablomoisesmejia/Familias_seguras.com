<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Productos");

require_once("../app/controllers/public/producto/productos_controller.php");

Page::templateFooter();
?>