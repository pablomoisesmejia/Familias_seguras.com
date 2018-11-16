<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Exportar base de datos");
require_once("../../app/views/dashboard/account/export_view.php");
Page::templateFooter();
?>