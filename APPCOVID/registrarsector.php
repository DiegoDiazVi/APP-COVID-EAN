<?php
  require("appconexion.php");

  $sector= $_POST["sector"];

  mysqli_query($mysqli,"INSERT INTO sector (sector, SEC_ECO_idsececo)
  VALUES('$sector', '1')");

  echo '<script language="javascript">alert("Sector registrado con éxito");</script> ';
  echo "<script>location.href='adminmenu.php'</script>";

 ?>
