<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar Anuncios");
require_once("../../app/controllers/dashboard/anuncio/index_controller.php");
Page::templateFooter();
?>