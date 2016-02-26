
 <?php

$msg = null;

      if (isset($_POST["phpmailer"]))
     {
        
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $asunto =htmlspecialchars( $_POST["asunto"]);
    $mensaje = $_POST["mensaje"];
    $adjunto = $_FILES["adjunto"];
        
        require "PHPMailer/PHPMailerAutoload.php";
      $mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "eafit.pruebas@gmail.com";
$mail->Password = "Hola123*";
$mail->SetFrom("garciajarrison@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("garciajarrison@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
      
      
          $mail = new PHPMailer;
          
          //indico a la clase que use SMTP
          $mail->IsSMTP();
          
          //permite modo debug para ver mensajes de las cosas que van ocurriendo
          //$mail->SMTPDebug = 2;

          //Debo de hacer autenticación SMTP
          $mail->SMTPAuth = true;
          $mail->SMTPSecure = "ssl";

          //indico el servidor de Gmail para SMTP
          $mail->Host = "smtp.gmail.com";

          //indico el puerto que usa Gmail
          $mail->Port = 465;


        // Usuario del correo desde el cual queremos enviar, para Gmail recordar usar el usuario completo (usuario@gmail.com) 
        $mail->Username = "eafit.pruebas@gmail.com"; 
        // Contraseña 
        $mail->Password = "Hola123*"; 
       
          $mail->From = "eafit.pruebas@gmail.com";
        
          $mail->FromName = "Administrador";
        
          $mail->Subject = $asunto;
        
          $mail->addAddress($email, $nombre);
        
          $mail->MsgHTML($mensaje);
        
    
       if ($adjunto ["size"] > 0)
      {
           
          $mail->addAttachment($adjunto ["tmp_name"], $adjunto ["name"]);
   }
    
        
          if($mail->Send())
        {
    $msg= "En hora buena el mensaje ha sido enviado con exito a $email";
    }
        else
        {
    $msg = "Lo siento, ha habido un error al enviar el mensaje a $email";
    }
 }
?>
    
<!DOCTYPE HTML>
<html>
<head>
<title>Contacto</title>
</head>
<body>
<h3>Email de Contacto</h3>
<strong><?php echo $msg; ?></strong>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
    
<table border="0">
<tr>
<td>Nombre del destinatario:</td>
<td><input name="nombre" type="text" id="nombre"></td>
</tr>
<tr>
<td>Email del destinatario:</td>
<td><input name="email" type="text" id="email"></td>
</tr>
<tr>
<td>Asunto:</td>
<td><input name="asunto" type="text" id="asunto"></td>
</tr>
<tr>
<td>Archivo adjunto:</td>
<td><input type="file" name="adjunto"></td>
</tr>
<tr>
<td>Mensaje:</td>
<td><textarea name="mensaje" cols="50" rows="15" id="mensaje"></textarea></td>
</tr>
<tr>
<td></td><td><input type="submit" value="Enviar"></td>
</tr>
</table>
<input type="hidden" name="phpmailer">
</form>
</body>
