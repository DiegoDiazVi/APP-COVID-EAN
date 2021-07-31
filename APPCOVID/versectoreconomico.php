<?php
#verificacion de login
session_start();
 if (@!$_SESSION['usuario']) {
   header("Location:login.php");
 }elseif ($_SESSION['rol']==2) {
   header("Location:administrador.php");
 }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ver sector economico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="imagen/icon.png" rel="icon" type="image/x-icon">
    <script src="https://kit.fontawesome.com/163b70c708.js" crossorigin="anonymous"></script>
  </head>
  <style media="screen">
  #body{
      background: url(imagen/fondo1.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;

  }
  #fieldset{
          border: inset 8px #1585EF;
          background: #ECECEC;
          width:950px;
          height:330px;
          border-radius:10px 10px 10px 10px;
          margin:10px 215px;
  }
  #titulo{
      text-align: center;
      color: #000000;
  }
  </style>
  <body id="body">
    <img src="imagen/ean2.png" width="230" height="130">
    <img src="imagen/logo3.png" width="130" height="130">
    <br><br>
    <center>
      <center>
        <a class="btn btn-primary" href="admin.php" role="button">Ver usuarios <i class="fas fa-pen-fancy"></i></a>
        <a class="btn btn-warning" href="adminpropuesta.php" role="button">Ver propuestas <i class="fas fa-edit"></i></a>
        <a class="btn btn-success" href="sectoreconomico.php" role="button">Registrar sector economico <i class="far fa-arrow-alt-circle-up"></i></a>
        <a class="btn btn-secondary" href="sector.php" role="button">Registrar sector <i class="fas fa-atlas"></i></a>
        <a class="btn btn-info" href="establecimiento.php" role="button">Registrar establecimiento <i class="fas fa-bahai"></i></a>
        <a class="btn btn-warning" href="versector.php" role="button">Ver Sector <i class="fas fa-book-open"></i></a>
        <br>
        <br>
        <a class="btn btn-success" href="verestablecimiento.php" role="button">Ver establecimiento <i class="fas fa-briefcase"></i></a>
        <a class="btn btn-danger" href="cierre.php" role="button">Cerrar sesión <i class="fas fa-power-off"></i></a>
        <br><br>
      <center>
      <div class="card text-center" style="width: 80rem;">
        <div class="card-header">
          Consultar sector económico
        </div>
        <div class="card-body">
      <br>
      <h2 id="titulo">SECTOR ECONÓMICO <i class="fas fa-user-alt"></i></h2>
      <center>
      <table class="table" style="width: 60rem;">
        <thead class="thead-dark">
          <?php
              #seleccion de la infromazcion de la tabla cuentas
              require("appconexion.php");
              $sql=("SELECT * FROM sec_eco");

              $query=mysqli_query($mysqli,$sql);


                  echo "<thead class='thead-dark'>";
                  echo "<tr>";

                  echo "<th scope='col'>ID SECTOR ECONÓMICO</th>";
                  echo "<th scope='col'>SECTOR ECONOMICO</th>";
                  echo "<th scope='col'>BORRAR</th>";
                echo "</tr>";
            ?>
                <?php
                 while($arreglo=mysqli_fetch_array($query)){
                   echo "<tr class='bg-primary'>";
                    echo "<tbody class='table-secondary'>";
                      echo "<td>$arreglo[0]</td>";
                      echo "<td>$arreglo[1]</td>";
                      echo "<td><center><a href='borrarsector.php?id=$arreglo[0]&idborrar=2'><i class='far fa-trash-alt'></i></center></a></td>";
                  echo "</tr>";
                }
              ?>
            </center>
      </table>
      <br>
      <center><a class="btn btn-primary" href="adminmenu.php" role="button">Menú principal <i class="fas fa-home"></i></a></center>
    </div>
      <div class="card-footer text-muted">
        Todos los usuarios de nuestros servicios sujeta a la Declaración de Privacidad y acepta que quedará vinculado por los Términos de Servicio.
        Por favor revise estos documentos
        © 2020 APP COVID Related Services Company, Inc.
      </div>
    </div>
  </center>
  <br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
