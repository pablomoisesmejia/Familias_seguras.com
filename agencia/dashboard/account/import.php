<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Importar base de datos");
require_once("../../app/views/dashboard/account/import_view.php");
Page::templateFooter();
?>