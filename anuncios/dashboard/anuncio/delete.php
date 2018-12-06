<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar Anuncios");
require_once("../../app/views/dashboard/anuncio/delete_view.php");
Page::templateFooter();
?>