<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Propiedades");

require_once("../app/views/public/producto/propiedades_view.php");

Page::templateFooter();
?>