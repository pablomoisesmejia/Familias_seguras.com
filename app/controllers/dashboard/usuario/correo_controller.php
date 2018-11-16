<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("../../app/models/cuadro_comparativo.class.php");
require_once("../../app/helpers/PHPMailer/PHPMailer.php");
require_once("../../app/helpers/PHPMailer/SMTP.php");
require_once("../../app/helpers/PHPMailer/Exception.php");

class Correo{

    public function correo(){
        $cuadro = new Cuadro_Comparativo;
        if($cuadro->getCorreoCorreo($_GET['id'])){
            $var1 = $cuadro->getCorreoCorreo($_GET['id']);
            $correo = $var1['correo'];
            if($cuadro->getCompanias($_GET['id3'])){
                $array = $cuadro->getCompanias($_GET['id3']);
                if($cuadro->getRamo($_GET['id'])){
                    $ramos = $cuadro->getRamo($_GET['id']);
                    $ramo = $ramos['tipo_seguro'];

                    foreach($array as $comany){
                        for($k = 0;$k < count($array);$k ++){
                            $array2[$k] = array($comany['compania_interes']);
                        }
                    }
                    $array3 = array("Opcion 1", "Opcion 2", "Opcion 3");
                    $resultado = implode(", ", $array3);

                    $mail = new PHPMailer();

                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host = 'mail.familiasseguras.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'support@familiasseguras.com';
                    $mail->Password = 'peka2101';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;
                    $mail->isHTML(true);

                    $mail->setFrom('support@familiasseguras.comm', 'Familias Seguras');
                    $mail->AddReplyTo('support@familiasseguras.com', 'Familias Seguras'); 
                    $mail->addAddress($correo, 'Usuario');

                    $mail->Subject = 'Cuadro comparativo listo';
                    $mail->Body =
                        "<body style='font-family: Arial, Helvetica, sans-serif; margin: 0; padding:0;' >
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
                        
                                <tr>
                                    <td>
                                        <p> Estimado usuario :</p>
                                        <br>
                                        <p> Es para nosotros un verdadero honor y compromiso el haber sido tomados en cuenta para presentarte distintas alternativas para tu ".$ramo.", el cual solicitaste se cotizara y analizara entre:".$resultado."</p> 
                                        <p> Nuestro equipo se dio a la tarea de buscar las mejores alternativas para satisfacer tus necesidades, hemos resumido todo nuestro an&aacute;lisis en un cuadro comparativo al cual puedes tener acceso, haciendo <strong>CLICK AQUI</strong></p>
                                        <p>Tan pronto como haya sido visualizado el cuadro comparativo, nuestro equipo te contactar&aacute; para asesorarte en los pasos a seguir para la contrataci&oacute;n de tu seguro y aclararte cualquier duda. Que Dios te bendiga</p>
                                        <p>Atentamente, <strong> Familias Seguras.com </strong></p>
                                    </td>
                                </tr>
                        
                        </div>
                        <div class='row' style='text-align:center'>
                        
                        </div>
                        
                        </section>
                        
                        </body>";

                    if(!$mail->send()){
                        Page::showMessage(2, "Error, mensaje no enviado. Error: ".$mail->ErrorInfo, "create_cuadro.php");
                        return false;
                    }else{
                        return true;
                    }
                }else{
                    throw new Exception("No se pudo obtener el ramo del seguro");
                }
            }else{
                throw new Exception("No se pudieron obtener las compañias de interes");
            }
            
        }else{
            throw new Exception("No se pudo obtener el correo del cliente");
        }
    }
}
?>