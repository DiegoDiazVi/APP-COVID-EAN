<?php


	require("appconexion.php");
  extract($_POST);

  $sql="UPDATE est SET establecimiento='$establecimiento', SECTOR_idsector='$idsector' WHERE idest ='$id'";
	$actualiza=mysqli_query($mysqli,$sql);
	if ($actualiza==null){
		echo '<script>alert("ERROR AL ACTUALIZAR EL ESTABLECIMIENTO")</script> ';
    echo "<script>location.href='verestablecimiento.php'</script>";


	}else {
		echo '<script>alert("ESTABLECIMIENTO ACTUALIZADO")</script> ';
		echo "<script>location.href='verestablecimiento.php'</script>";
	}
?>
