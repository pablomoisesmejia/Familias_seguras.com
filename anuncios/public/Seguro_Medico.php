<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeaderbasic("Medico Hospitalario");
require_once("../app/views/public/cotizaciones/mh_view.php");
Page::templateFooterBasic();
?>