<?php
    require("appconexion.php");
    extract($_GET);
        if(@$idborrar==2){

          $sqlborrar="DELETE FROM sec_eco WHERE idsececo =$id";
          $resborrar=mysqli_query($mysqli,$sqlborrar);
          echo '<script>alert("ADMINISTRADOR HA ELIMINADO ESTE SECTOR ECONÓMICO")</script> ';
          echo "<script>location.href='versectoreconomico.php'</script>";
        }
    ?>
