<?php
require_once('../../models/database.class.php');
require_once('../../helpers/validator.class.php');
//MODELOS A UTILIZAR
require_once('../../models/solicitudes_procesadas.class.php');
require_once('../../models/empleados.class.php');
require_once('../../models/solicitudes.class.php');
require_once('../../models/solicitudes_atencion_cliente.class.php');
require_once('../../models/cliente_prospectos.class.php');

date_default_timezone_set('America/El_Salvador');
$dias_semana = ['domingo', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado'];
$dia = date('N');
echo $dias_semana[$dia];

$solicitudes_procesadas = new Solicitudes_procesadas;
?>