<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeaderbasic("Seguro de vida");
require_once("../app/views/public/cotizaciones/vida_view.php");
Page::templateFooterBasic();
?>