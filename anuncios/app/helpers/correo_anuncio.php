<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$tipo_seguro = $_POST['tipo_seguro'];
$seguro = '';

//$correo = 'fernanxavi58@gmail.com';
//$id_cliente = 21;
//$tipo_seguro = 4;

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$seguro = $_POST['tipo_seguro'];
$hora_contacto = $_POST['horario'];
$telefono = $_POST['telefono'];
//$whatsapp = $_POST['whatsapp'];
$correo = $_POST['correo'];

//Declaracion de variables para cada tipo de cotización
$info_seguro = '';
$mensaje = '';

//Variables de Seguro Medico
$nombre_conyugue = '';
$fecha_nacimiento_conyugue = '';
$cantidad_hijos = '';

//Variables de Seguro de vida
$fumador = '';
$suma_asegurada = '';
$cesion_bancaria = '';

//Variables de seguro de incendios
$tipo_inmueble = '';
$direccion = '';
$asegurado_calidad = '';
$valor_construccion = '';
$valor_contenido = '';

//Variables de seguro de vehiculos
$tabla_vehiculos = '';

if($tipo_seguro == 1)
{
    
    $nombre_conyugue = $_POST['nombre_conyugue'];
    $fecha_nacimiento_conyugue = $_POST['fecha_nacimiento_conyugue'];
    $cantidad_hijos = $_POST['cantidad_hijos'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $seguro = 'Seguro Medico';

    $mensaje = 'El cliente con nombre '.$nombres.' '.$apellidos.' hizo una cotización de '.$seguro.',
    su fecha de nacimiento es '.$fecha_nacimiento.', su correo electrónico es '.$correo.', su número de telefono es '.$telefono.'
    y lo puedes contactar en el siguiente horario '.$hora_contacto.'.
    <br>
    Información sobre la cotización
    <br>
    <br>
    El nombre del conyugue es '.$nombre_conyugue.' <br> la fecha de nacimiento del conyugue es '.$fecha_nacimiento_conyugue.'<br> y la cantidad de hijos es de '.$cantidad_hijos.'.';
}
if($tipo_seguro == 2)
{
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $fumador = $_POST['fumador'];
    $suma_asegurada = $_POST['suma_asegurada'];
    $cesion_bancaria = $_POST['cesion_bancaria'];
    $seguro = 'Seguro de Vida';

    $mensaje = 'El cliente con nombre '.$nombres.' '.$apellidos.' hizo una cotización de '.$seguro.',
    su fecha de nacimiento es '.$fecha_nacimiento.', su correo electrónico es '.$correo.', su número de telefono es '.$telefono.'
    y lo puedes contactar en el siguiente horario '.$hora_contacto.'.
    <br>
    Información sobre la cotización
    <br>
    <br>
    El cliente '.$fumador.' se considera fumador <br> la suma asegurada es de '.$suma_asegurada.'<br> y '.$cesion_bancaria.' la necesita para un banco.';
}
if($tipo_seguro == 3)
{
    
    $tipo_inmueble = $_POST['tipo_inmueble'];
    $direccion = $_POST['direccion_inmueble'];
    $asegurado_calidad = $_POST['asegurado_calidad'];
    $valor_construccion = $_POST['valor_construccion'];
    $valor_contenido = $_POST['valor_contenido'];
    $seguro = 'Seguro de Incendios';

    $mensaje = '
    El cliente con nombre '.$nombres.' '.$apellidos.' hizo una cotización de '.$seguro.',
    su correo electrónico es '.$correo.', su número de telefono es '.$telefono.'
    y lo puedes contactar en el siguiente horario '.$hora_contacto.'.
    <br>
    Información sobre la cotización
    <br>
    <br>El tipo de inmueble es '.$tipo_inmueble.'<br> la dirección es '.$direccion.' <br> la calidad de asegurar el inmueble es '.$asegurado_calidad.'<br> 
    el valor de las construcciones sin el terreno es '.$valor_construccion.'<br> y el valor del contenido es de'.$valor_contenido.'.';
}
if($tipo_seguro == 4)
{
    $seguro = 'Seguro de Vehiculo';
    $info_seguro = $_POST['vehiculos'];
    $tabla_vehiculos .= "
    <table style='text-align: center; border-collapse: collapse; font-size: 1em;
    font-family: Calibri; 
    font-weight: 0;'>
        <thead>
            <tr style='border-bottom: 1px solid #d0d0d0;'>
                <th style='padding: 10px 8px; border-radius: 2px;'>Marca</th>
                <th style='padding: 10px 8px; border-radius: 2px;'>Modelo</th>
                <th style='padding: 10px 8px; border-radius: 2px;'>Año</th>
                <th style='padding: 10px 8px; border-radius: 2px;'>Origen</th>
                <th style='padding: 10px 8px; border-radius: 2px;'>Valor</th>
                <th style='padding: 10px 8px; border-radius: 2px;'>Placa</th> 
            </tr>
        </thead>
        <tbody>";
        for($i = 0; $i<count($info_seguro); $i++)
        {
            $tabla_vehiculos .=
            "<tr style='border-bottom: 1px solid #d0d0d0;'>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][0]."</td>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][1]."</td>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][4]."</td>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][6]."</td>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][7]."</td>
                <td style='padding: 10px 8px; border-radius: 2px;'>".$info_seguro[$i][5]."</td>
            </tr>";
        };
        $tabla_vehiculos .=
        "
        </tbody>
    </table>
    ";

    $mensaje = 'El cliente con nombre '.$nombres.' '.$apellidos.' hizo una cotización de '.$seguro.',
    su correo electrónico es '.$correo.', su número de telefono es '.$telefono.'
    y lo puedes contactar en el siguiente horario '.$hora_contacto.'.gi
    <br>
    Información sobre la cotización
    <br>
    <br>'.
    $tabla_vehiculos;
}

//print_r($companias);
//print_r($info_seguro);


$correo_asegurador = 'fernanxavi58@gmail.com';
$mail = new PHPMailer();                              // Passing `true` enables exceptions
//Server settings
$mail->SMTPDebug = 0;                                 // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '	mail.familiasseguras.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                        // Enable SMTP authentication
$mail->Username = 'support@familiasseguras.com';                 // SMTP username
$mail->Password = 'peka2101';    
$mail->SetFrom('support@familiasseguras.comm', 'Familias Seguras');
$mail->AddReplyTo('support@familiasseguras.com', 'Familias Seguras');                       // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;
if($correo)
{
    $mail->Subject = 'Gracias por cotizar con nosotros';
    $mail->AddAddress($correo);
    $mail->MsgHTML("
    <body style='font-family: Arial, Helvetica, sans-serif; margin: 0; padding:0;' >
    <div class='row' style='margin-top: 25px'>

        <center><img  src='http://familiasseguras.com/web/img/logo/logo_only_b.png'
        style='text-align:center;
        
        '>
        </center>
    <h1 style='	color:rgb(0, 93, 180);
                text-align:center;
                margin:0;
                margin-bottom: 18px;
                
                font-size: 2.3em;
                font-family: Calibri; 
                font-weight: 100;
                padding: 0;
                padding-left: 5%;
                padding-right: 5%;'>Gracias por confiar en nosotros</h1>

        <div class='row' style='margin-bottom:120px; height: 160px;border-top: 1px solid rgba(128, 128, 128, 0.377);'>
            <div style='float:left; width: 80%; '>
                <h3 style='	color:rgb(78, 78, 78);
                font-weight: 50;
                text-align:center; margin-top: 40px; padding-left: 5%; padding-right: 5%;'>
                Dentro de un momento nos pondremos en contacto contigo, <br> 
                para poder hablar acerca de nuestros servicios.
                </h3>
            </div>
            <div style='opacity:0.8; filter: brightness(0.6); float:left; background-color:mediumvioletred; width: 20%; height: 100%; background-image: url(http://familiasseguras.com/web/img/logo/maili.jpg);background-size: cover;background-position-x: -80px' >

            </div>
            
        </div>

    </div>
    <div class='row' style='text-align:center'>

    </div>

    </section>

    </body>

    ");
    $mail->Send();
}
if($correo_asegurador)
{
    $mail->Subject = 'Nueva contización';
    $mail->AddAddress($correo_asegurador);
    $mail->MsgHTML("
    <body style='font-family: Arial, Helvetica, sans-serif; margin: 0; padding:0;' >
    <div class='row' style='margin-top: 25px'>

        <center><img  src='http://familiasseguras.com/web/img/logo/logo_only_b.png'
        style='text-align:center;
        
        '>
        </center>
    <h1 style='	color:rgb(0, 93, 180);
                text-align:center;
                margin:0;
                margin-bottom: 18px;
                
                font-size: 2.3em;
                font-family: Calibri; 
                font-weight: 100;
                padding: 0;
                padding-left: 5%;
                padding-right: 5%;'>Nueva solicitud de oferta</h1>

        <div class='row' style='margin-bottom:120px; height: 160px;border-top: 1px solid rgba(128, 128, 128, 0.377);'>
            <div style='float:left; width: 80%; '>
                <h3 style='	color:rgb(78, 78, 78);
                font-weight: 50;
                margin-top: 40px; padding-left: 5%; padding-right: 4%;'>
                    $mensaje
                </h3>
            </div>
            <div style='opacity:0.8; filter: brightness(0.6); float:left; background-color:mediumvioletred; width: 20%; height: 100%; background-image: url(http://familiasseguras.com/web/img/logo/maili.jpg);background-size: cover;background-position-x: -80px' >

            </div>
            
        </div>

    </div>
    <div class='row' style='text-align:center'>

    </div>

    </section>

    </body>

    ");
    if($mail->Send())
    {
        echo 1;
    }
    else
    {
        echo 0;
    }
}

?>