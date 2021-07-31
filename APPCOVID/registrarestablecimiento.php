<?php
  require("appconexion.php");

  $establecimiento= $_POST["establecimiento"];

  mysqli_query($mysqli,"INSERT INTO est (establecimiento, SECTOR_idsector )
  VALUES('$establecimiento', '1')");

  echo '<script language="javascript">alert("Establecimiento registrado con éxito");</script> ';
  echo "<script>location.href='adminmenu.php'</script>";

 ?>
