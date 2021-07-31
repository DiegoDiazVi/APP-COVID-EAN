<?php
  require("appconexion.php");

  $sector= $_POST["sectoreconomico"];

  mysqli_query($mysqli,"INSERT INTO sec_eco (sectoreconomico)
  VALUES('$sector')");

  echo '<script language="javascript">alert("Sector económico registrado con éxito");</script> ';
  echo "<script>location.href='adminmenu.php'</script>";




 ?>
