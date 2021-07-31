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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENÚ</title>
    <link href="imagen/icon.png" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/163b70c708.js" crossorigin="anonymous"></script>
  </head>
  <body style="background-color:#F3F3F3;">


    <img src="imagen/ean.png" width="230" height="130">
    <img src="imagen/logo3.png" width="130" height="130">
    <!--button-->
    <center>
    <a class="btn btn-outline-primary" href="propuesta.php" role="button">Registrar propuesta <i class="fas fa-pen-fancy"></i></a>
    <a class="btn btn-outline-warning" href="aportes.php" role="button">Aportes <i class="fas fa-edit"></i></a>
    <a class="btn btn-outline-success" href="consultas.php" role="button">Consultas <i class="fas fa-search"></i></a>
    <a class="btn btn-outline-danger" href="cierre.php" role="button">Cerrar sesión <i class="fas fa-power-off"></i></a>

    <!--cartas-->
    <br><br><br>
    <div class="card-deck" style="width: 70rem;">
      <div class="card">
        <img class="card-img-top" src="imagen/seguridad1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Seguridad</h5>
          <p class="card-text">Mantenga siempre actualizado su navegador y sistema operativo.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="imagen/seguridad2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Recomendación</h5>
          <p class="card-text">Evite realizar operaciones en computadores publicos, computadores desconocidos o atraves de redes públicas inalámbricas.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="imagen/seguridad3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Registre su propuesta</h5>
          <p class="card-text">Puede registrar su propuesta de manera optima para la reactivación económica.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <br><br><br>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
