<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeaderbasic("Seguro de Motores");
require_once("../app/views/public/cotizaciones/motores_view.php");
Page::templateFooterBasic();
?>