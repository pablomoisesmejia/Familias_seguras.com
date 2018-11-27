<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Cotiza tu Seguro");

require_once("../app/views/public/producto/cotiza_seguro_view.php");

Page::templateFooter();
?>