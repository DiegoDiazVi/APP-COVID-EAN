<?php
    require("appconexion.php");
    extract($_GET);
        if(@$idborrar==2){

          $sqlborrar="DELETE FROM est WHERE idest =$id";
          $resborrar=mysqli_query($mysqli,$sqlborrar);
          echo '<script>alert("ADMINISTRADOR HA ELIMINADO ESTE ESTABLECIMIENTO")</script> ';
          echo "<script>location.href='verestablecimiento.php'</script>";
        }
    ?>
