

<?php
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
            
            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
    class enviarmail{

        function enviar(){

            
            
          
                $correo=$_POST['correo'];
                //echo $correo;
                $mail = new PHPMailer();                              // Passing `true` enables exceptions
                //Server settings
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;   
                $mail->AddAddress($correo);                            // Enable SMTP authentication
                $mail->Username = 'thebestdestroyer6@gmail.com';                 // SMTP username
                $mail->Password = 'Castillo.99';    
                $mail->SetFrom('thebestdestroyer6@gmail.com', 'Familias Seguras');
                $mail->AddReplyTo('thebestdestroyer6@gmail.com', 'Familias Seguras');                       // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;      
                $mail->Subject = 'Gracias por cotizar con nosotros';
                $mail->MsgHTML(  "
                <body style='?background:#fafafa;'>
                <div class='row'
                        style=' background:#b0bec5; 
                                box-shadow: 0px 0px 10px white;
                                font-family:calibri;'>
                                <center><img  src='http://familiasseguras.com/public/img/logo/logo_large.png'
                                style='text-align:center;
                                width:60%; '></center>
                <h1 style='	color:#ffffff;
                            text-align:center;
                            margin:0;
                            padding: 0;
                            '>Gracias por confiar en nosotros</h1>
                
                            <h2 style='color:#fafafa;
                                        text-align:center;'>
                                        Dentro de un momento nos pondremos en contacto contigo, <br> 
                                        para poder hablar acerca de nuestros servicios
                                        </h2>
                
                </div>
                <div class='row' style='text-align:center'>
                    
                </div>
                
                    </section>
                
                </body>
            
                " );      
                
                                
            
                if($mail->Send())
                {
                   echo 1;
                   
            
                }
                else
                {
                    echo 'neles chele';
                }
            }
             
        
    }
    $object = new enviarmail;
    $object->enviar();

?>