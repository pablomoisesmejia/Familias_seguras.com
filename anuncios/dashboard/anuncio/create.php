<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear Anuncios");
require_once("../../app/controllers/dashboard/anuncio/create_banner_controller.php");
Page::templateFooter();
?>