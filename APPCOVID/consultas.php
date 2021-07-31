<?php
/*reanudar sesion y comprobar login */
session_start();
if (@!$_SESSION['usuario']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==1) {
  header("Location:administrador.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultar</title>
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


      <br>
      <center>
        <a class="btn btn-primary" href="propuesta.php" role="button">Registrar propuesta <i class="fas fa-pen-fancy"></i></a>
        <a class="btn btn-warning" href="aportes.php" role="button">Aportes <i class="fas fa-edit"></i></a>
        <a class="btn btn-danger" href="cierre.php" role="button">Cerrar sesión <i class="fas fa-power-off"></i></a>

      </center>
      <br>
      <center>
      <div class="card text-center" style="width: 80rem;">
        <div class="card-header">
          Consultar mis propuestas
        </div>
        <div class="card-body">
      <br>
      <h2 id="titulo">CONSULTAR <i class="fas fa-archive"></i></h2>
      <center>
      <table class="table" style="width: 60rem;">
        <thead class="thead-dark">
          <?php
              #seleccion de la infromazcion de la tabla cuentas
              require("appconexion.php");
              $usuario = $_SESSION['usuario'];
              $propuesta = 
              $sql=("SELECT persona.identificacion, persona.nombre FROM persona WHERE usuario = '$usuario'
                     UNION
                     SELECT propuesta.descripcion, propuesta.estado FROM propuesta WHERE descripcion = '$propuesta'");

              $query=mysqli_query($mysqli,$sql);


                  echo "<thead class='thead-dark'>";
                  echo "<tr>";

                  echo "<th scope='col'>IDENTIFICACION</th>";
                  echo "<th scope='col'>USUARIO</th>";

                echo "</tr>";
            ?>
                <?php
                 while($arreglo=mysqli_fetch_array($query)){
                   echo "<tr class='bg-primary'>";
                    echo "<tbody class='table-secondary'>";
                      echo "<td>$arreglo[0]</td>";
                      echo "<td>$arreglo[7]</td>";
                  echo "</tr>";
                }
              ?>
            </center>
      </table>
      <table class="table" style="width: 60rem;">
          <thead class="thead-dark">
            <form action="registroconsulta.php" method="post" style="width: 20rem;">
              <div class="form-group" >
                <label for="referencia">N° de radicado</label>
                <input type="text" class="form-control" placeholder="Ingrese el numero de radicado" name="radicado" required>
              </div>
              <button type="submit" class="btn btn-success">CONFIRMAR <i class="far fa-arrow-alt-circle-right"></i></button>
              <br>
              <br>
            </form>

      </table>
      <br>
      <center><a class="btn btn-primary" href="menu.php" role="button">Menú principal <i class="fas fa-home"></i></a></center>
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
