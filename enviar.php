<?php
$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$mensaje = $_POST["mensaje"];
$body = "Nombre: ". $nombre . "<br>Correo: " . $correo . "<br>Mensaje: ". $mensaje;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug =0;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'felipevargas989898@gmail.com';                     
    $mail->Password   = 'pipito123';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom('felipevargas989898@gmail.com', $nombre);
    $mail->addAddress('felipevargas989898@gmail.com', 'Felipe');     
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Email desde la web';
    $mail->Body    = $body;
    $mail->CharSet    = 'UTF-8';
    $mail->send();
    header('Location: bd.html');

} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}