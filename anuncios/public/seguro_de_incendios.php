<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeaderbasic("Seguro de Incendios");
require_once("../app/views/public/cotizaciones/incendios_view.php");
Page::templateFooter();
?>