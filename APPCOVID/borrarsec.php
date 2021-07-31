<?php
    require("appconexion.php");
    extract($_GET);
        if(@$idborrar==2){

          $sqlborrar="DELETE FROM sector WHERE idsector =$id";
          $resborrar=mysqli_query($mysqli,$sqlborrar);
          echo '<script>alert("ADMINISTRADOR HA ELIMINADO ESTE SECTOR ")</script> ';
          echo "<script>location.href='versector.php'</script>";
        }
    ?>
