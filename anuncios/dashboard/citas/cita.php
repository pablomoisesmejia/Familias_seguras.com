<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Citas de Anuncios");
require_once("../../app/views/dashboard/citas/citas.php");
Page::templateFooter();
?>