<?php

  session_start();
  $_SESSION['usuario'];

  require("appconexion.php");
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  extract($_GET);
#verificacion  de datos de ingreso

  $tpropuesta= $_POST["tipopropuesta"];
  $propuesta= $_POST["propuesta"];
  $operacion= $_POST["operacion"];
  $fecha = date("Y-m-d");
  $usuario = $_SESSION['usuario'];
  $establecimiento= $_POST["establecimiento"];
  $sector= $_POST["sector"];
  $actividad= $_POST["actividad"];

  #insercion de datos a la DB en la tabla persona

  mysqli_query($mysqli,"INSERT INTO est (establecimiento, SECTOR_idsector )
  VALUES('$establecimiento', '$sector')");

  $sql1 ="SELECT * FROM est WHERE  establecimiento='$establecimiento' ";
  $resql1=mysqli_query($mysqli,$sql1);
  $row1=mysqli_fetch_row($resql1);
  $idest=$row1[0];

  mysqli_query($mysqli,"INSERT INTO propuesta (descripcion,tipopropuesta,fecharegistro,estado,EST_idest)
  VALUES('$propuesta','$tpropuesta','$fecha','Recibida','$idest')");

  $sql="SELECT * FROM propuesta WHERE descripcion='$propuesta'";
  $ressql=mysqli_query($mysqli,$sql);
  $row=mysqli_fetch_row ($ressql);
  $idpropuesta=$row[0];

  mysqli_query($mysqli,"INSERT INTO plan_operacion (plan,PROPUESTA_idpropuesta)
  VALUES('$operacion','$idpropuesta')");

  $sql2="SELECT * FROM plan_operacion WHERE plan='$operacion'";
  $ressql2=mysqli_query($mysqli,$sql2);
  $row=mysqli_fetch_row ($ressql2);
  $idplan=$row[0];

  mysqli_query($mysqli,"INSERT INTO actividad (actividad,PLAN_OPERACION_idplan)
  VALUES('$actividad','$idplan')");


  $correo="SELECT * FROM persona WHERE usuario = '$usuario'";
  $recorreo=mysqli_query($mysqli,$correo);
  $row=mysqli_fetch_row ($recorreo);
  $email=$row[5];
  $nombre=$row[2];

  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = '587';
  $mail->Username = 'appcovideandb@gmail.com';
  $mail->Password = 'batmanguason';

  $mail->setFrom('appcovideandb@gmail.com', 'APP COVID');
  $mail->addAddress($email, $nombre);

  $mail->Subject='Registro de propuesta APP COVID';
  $mail->Body="Bienvenido, esta es toda la informacion de tu Propuesta $nombre,
  el numero de radicado es $idpropuesta y la fecha de registo es $fecha
  ten en cuenta que actualmente se encuentra en estado Recibida";


  if ($mail->send()) {

          echo '<script language="javascript">alert("Propuesta registrada con éxito");</script> ';
      		echo "<script>location.href='propuesta.php'</script>";


  } else {
    echo "error";

  }

?>
