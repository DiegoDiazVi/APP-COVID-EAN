<?php
    require("appconexion.php");
    extract($_GET);
        if(@$idborrar==2){

          $sqlborrar="DELETE FROM persona WHERE identificacion =$id";
          $resborrar=mysqli_query($mysqli,$sqlborrar);
          echo '<script>alert("ADMINISTRADOR HA ELIMINADO A ESTE USUARIO")</script> ';
          echo "<script>location.href='admin.php'</script>";
        }
    ?>
