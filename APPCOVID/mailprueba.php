<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  $nombre= 'Diego';
  $email = 'yolymaria33@gmail.com';

  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = '587';
  $mail->Username = 'appcovideandb@gmail.com';
  $mail->Password = 'batmanguason';

  $mail->setFrom('appcovideandb@gmail.com', 'APP COVID');
  $mail->addAddress($email, 'APP COVID');

  $mail->Subject='Registro de propuesta APP COVID';
  $mail->Body="Esta es una prueba $nombre";

  if ($mail->send()) {
    echo "enviado";
    echo "$email";

  } else {
    echo "error";

  }
 ?>
