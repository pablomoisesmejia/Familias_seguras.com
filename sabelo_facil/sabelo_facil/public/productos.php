<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Productos");
require_once("../app/views/public/sections/parallax-top_view.php");
require_once("../app/controllers/public/producto/productos_controller.php");
require_once("../app/views/public/sections/parallax-bottom_view.php");
Page::templateFooter();
?>