<?php
require_once("../../app/views/public/templates/page.class.php");
Page::templateHeader("index");
require_once("../../app/views/public/index/index_view.php");
Page::templateFooter();
?>