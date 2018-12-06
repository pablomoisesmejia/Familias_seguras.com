<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear Anuncios");
require_once("../../app/views/dashboard/anuncio/create_view.php");
Page::templateFooter();
?>