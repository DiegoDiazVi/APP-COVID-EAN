<?php

extract($_POST);
	require("appconexion.php");


  $sql="UPDATE persona SET nombre='$nombre',apellidopaterno='$apellidopaterno',
  apellidomaterno='$apellidomaterno',correoelectronico='$email',
  numerocelular='$celular',password='$password' WHERE identificacion ='$id'";
	$actualiza=mysqli_query($mysqli,$sql);
	if ($actualiza==null){
		echo '<script>alert("ERROR AL ACTUALIZADA LA CUENTA ")</script> ';
    echo "<script>location.href='actualizarcuenta.php'</script>";

	}else {
		echo '<script>alert("CUENTA ACTUALIZADA")</script> ';
		echo "<script>location.href='admin.php'</script>";
	}
?>
