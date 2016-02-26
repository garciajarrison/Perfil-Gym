<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - GMail SMTP test</title>
</head>
<body>
 
<?php
// Libreria PHPMailer
require 'PHPMailer/PHPMailerAutoload.php';
 
// Creamos una nueva instancia
$mail = new PHPMailer();
 
// Activamos el servicio SMTP
$mail->isSMTP();
// Activamos / Desactivamos el "debug" de SMTP 
// 0 = Apagado 
// 1 = Mensaje de Cliente 
// 2 = Mensaje de Cliente y Servidor 
$mail->SMTPDebug = 2; 
 
// Log del debug SMTP en formato HTML 
$mail->Debugoutput = 'html'; 
 
// Servidor SMTP (para este ejemplo utilizamos gmail) 
$mail->Host = 'smtp.gmail.com'; 
 
// Puerto SMTP 
$mail->Port = 587; 
 
// Tipo de encriptacion SSL ya no se utiliza se recomienda TSL 
$mail->SMTPSecure = 'tls'; 
 
// Si necesitamos autentificarnos 
$mail->SMTPAuth = true; 
 
// Usuario del correo desde el cual queremos enviar, para Gmail recordar usar el usuario completo (usuario@gmail.com) 
$mail->Username = "eafit.pruebas@gmail.com"; 
 
// Contraseña 
$mail->Password = "Hola123*"; 
 
// Conectamos a la base de datos 
//$db = new mysqli('hostname', 'usuario', 'cotraseña', 'basededatos'); 
 
//if ($db->connect_errno > 0) { 
//    die('Imposible conectar [' . $db->connect_error . ']'); 
//} 
 
// Creamos la sentencias SQL 
//$result = $db->query("SELECT * FROM personas");
 
// Iniciamos el "bucle" para enviar multiples correos. 
 
//while($row = $result->fetch_assoc()) { 
    //Añadimos la direccion de quien envia el corre, en este caso Codejobs, primero el correo, luego el nombre de quien lo envia. 
 
    //contenido del correo pruebas 
$body = '
<html>
<body>
client info text removed<br>
Registration Confirmation:<br><br>
___________________________________________________________________<br>
Class ID: 123123<br>
Registered by: hard<br>
Email: prb@prb.com<br>
<br>
Date: hoy<br>
<br>
You will receive an invitation from client info text removed. You may also receive an update with documents and a reminder with client info text removed.  Please watch your e-mail.<br>
Thanks,<br>
Name<br>
____________________________________________________________________<br>
client info text removed<br>
client info text removed<br>
client info text removed<br>
client info text removed<br>
client info text removed<br>
</body>
</html>
';



 
    $mail->setFrom('eafit.pruebas@gmail.com', 'Pruebas!'); 
    //$mail->addAddress($row['PersonasEmail'], $row['PersonasNombre']); 
	$mail->addAddress('garciajarrison@gmail.com', 'jarrison andrey garcia paniagua'); 
 
    //La linea de asunto 
    $mail->Subject = 'Bienvenido a Pruebas!'; 
 
    // La mejor forma de enviar un correo, es creando un HTML e insertandolo de la siguiente forma, PHPMailer permite insertar, imagenes, css, etc. (No se recomienda el uso de Javascript) 
 
    //$mail->msgHTML(file_get_contents('contenido.html'), dirname(__FILE__)); 
    $mail->MsgHTML($body);

    // Enviamos el Mensaje 
    $mail->send(); 
 
    // Borramos el destinatario, de esta forma nuestros clientes no ven los correos de las otras personas y parece que fuera un único correo para ellos. 
    $mail->ClearAddresses(); 

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
//}  
?>
</body>
</html>
 