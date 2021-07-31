<?php


	require("appconexion.php");
  extract($_POST);

  $sql="UPDATE propuesta SET tipopropuesta='$tipopropuesta',estado='$estadopropuesta',
  EST_idest ='$idestablecimiento' WHERE idpropuesta ='$id'";
	$actualiza=mysqli_query($mysqli,$sql);
	if ($actualiza==null){
		echo '<script>alert("ERROR AL ACTUALIZAR LA PROPUESTA ")</script> ';
    echo "<script>location.href='propuestaadmin.php'</script>";

	}else {
		echo '<script>alert("PROPUESTAACTUALIZADA")</script> ';
		echo "<script>location.href='adminpropuesta.php'</script>";
	}
?>
