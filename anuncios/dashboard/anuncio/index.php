<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar Anuncios");
require_once("../../app/views/dashboard/anuncio/index_view.php");
Page::templateFooter();
?>