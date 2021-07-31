<?php

  require("appconexion.php");
#verificacion  de datos de ingreso

  $documento= $_POST["documento"];
  $tdocumento= $_POST["tdocumento"];
  $nombre= $_POST["nombre"];
  $apellp= $_POST["apellp"];
  $apellm= $_POST["apellm"];
  $email= $_POST["email"];
  $celular= $_POST["celular"];
  $usuario= $_POST["usuario"];
  $password= $_POST["password"];
  $rpassword= $_POST["rpassword"];

  #Verificar que no existen usuarios, correos o id repetidos
	$verificaid=mysqli_query($mysqli,"SELECT * FROM persona WHERE identificacion='$documento'");
	$verifica_id=mysqli_num_rows($verificaid);
  $verificauser=mysqli_query($mysqli,"SELECT * FROM persona WHERE usuario='$usuario'");
  $verifica_user=mysqli_num_rows($verificauser);
  $verificaremail=mysqli_query($mysqli,"SELECT * FROM persona WHERE correoelectronico='$email'");
  $verifica_email=mysqli_num_rows($verificaremail);
  #validacion Conraseña
  if($password==$rpassword){
      if($verifica_user>0 || $verifica_id>0 || $verifica_email>0 ){
  			echo ' <script language="javascript">alert("Atencion, ya existe el documento o el usuario o el email, verifique sus datos");</script> ';
  			echo "<script>location.href='registrar.php'</script>";
  		}
      else{
        $cifrado=md5($password);
        #insercion de datos a la DB en la tabla persona
  			mysqli_query($mysqli,"INSERT INTO persona (identificacion,tipodocumento,nombre,apellidopaterno,apellidomaterno,correoelectronico,numerocelular,usuario,password,rol)
         VALUES('$documento', '$tdocumento', '$nombre', '$apellp', '$apellm', '$email', '$celular', '$usuario', '$cifrado', '2')");
  			echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
  			echo "<script>location.href='login.php'</script>";
  		}
		}else{
			echo ' <script language="javascript">alert("Las contraseñas no coinciden");</script> ';
      echo "<script>location.href='registrar.php'</script>";
		}

?>
