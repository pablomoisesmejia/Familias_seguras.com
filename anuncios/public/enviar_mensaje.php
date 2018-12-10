<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Enviar Mensaje");
require_once("../app/controllers/public/agregados/enviar_mensaje_controller.php");
Page::templateFooter();
?>