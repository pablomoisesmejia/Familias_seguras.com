<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Detalle del producto");
require_once("../app/views/public/sections/parallax-top_view.php");
require_once("../app/controllers/public/producto/detalle_controller.php");
Page::templateFooter();
?>