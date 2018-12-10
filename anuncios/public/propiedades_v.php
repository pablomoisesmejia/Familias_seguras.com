<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Propiedades");

require_once("../app/controllers/public/propiedades/index_controller.php");

Page::templateFooter();
?>