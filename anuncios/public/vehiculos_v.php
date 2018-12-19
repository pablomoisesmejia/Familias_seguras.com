<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Vehiculos");

require_once("../app/views/public/producto/compra_vehiculos_view.php");

Page::templateFooter();
?>