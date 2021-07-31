<?php


	require("appconexion.php");
  extract($_POST);

  $sql="UPDATE sector SET sector='$sector',SEC_ECO_idsececo='$idsectorecono' WHERE idsector ='$id'";
	$actualiza=mysqli_query($mysqli,$sql);
	if ($actualiza==null){
		echo '<script>alert("ERROR AL ACTUALIZAR EL SECTOR")</script> ';
    echo "<script>location.href='versector.php'</script>";


	}else {
		echo '<script>alert("PROPUESTA ACTUALIZADA")</script> ';
		echo "<script>location.href='versector.php'</script>";
	}
?>
