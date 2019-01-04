<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Directorio");
require_once("../app/views/public/producto/productos_view.php");
Page::templateFooter();
?>