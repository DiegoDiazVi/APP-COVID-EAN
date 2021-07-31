<?php
    session_start();
    $_SESSION['usuario'];

    require("appconexion.php");
    extract($_GET);
    #verificacion  de datos de ingreso

    $radicado= $_POST["radicado"];
    $aporte= $_POST["aporte"];
    $usuario = $_SESSION['usuario'];


    $sql="SELECT * FROM persona WHERE usuario = '$usuario'";
    $ressql=mysqli_query($mysqli,$sql);
    $row=mysqli_fetch_row ($ressql);
    $id=$row[0];

    #insercion de datos a la DB en la tabla persona
    mysqli_query($mysqli,"INSERT INTO aportes (PERSONA_identificacion,PROPUESTA_idpropuesta,modificacion)
    VALUES('$id','$radicado','$aporte')");

    echo '<script language="javascript">alert("Aporte registrado con éxito");</script> ';
    echo "<script>location.href='aportes.php'</script>";


 ?>
