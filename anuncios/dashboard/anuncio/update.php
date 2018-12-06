<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar Anuncios");
require_once("../../app/views/dashboard/anuncio/update_view.php");
Page::templateFooter();
?>