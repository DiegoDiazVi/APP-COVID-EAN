<?php
    session_start();
    $_SESSION['usuario'];

    require("appconexion.php");
    extract($_GET);
    #verificacion  de datos de ingreso

    $radicado= $_POST["radicado"];


    $sql="SELECT * FROM propuesta WHERE idpropuesta = '$radicado'";
    $ressql=mysqli_query($mysqli,$sql);
    $row=mysqli_fetch_row ($ressql);
    $id=$row[0];
    $esatdo=$row[4];


    if ($radicado==$id) {
        echo "<script>location.href='consultas2.php?radicado=$id'</script>";
    }
    else {
      echo '<script>alert("No existe el radicado")</script> ';
      echo "<script>location.href='consultas.php'</script>";
    }



 ?>
