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
    <title>Registrar establecimiento</title>
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
  </style>
  <body id="body">

    <img src="imagen/ean2.png" width="230" height="130">
    <img src="imagen/logo3.png" width="130" height="130">
    <br><br>
    <center>
      <a class="btn btn-primary" href="admin.php" role="button">Ver usuarios <i class="fas fa-pen-fancy"></i></a>
      <a class="btn btn-warning" href="adminpropuesta.php" role="button">Ver propuestas <i class="fas fa-edit"></i></a>
      <a class="btn btn-success" href="sectoreconomico.php" role="button">Registrar sector economico <i class="far fa-arrow-alt-circle-up"></i></a>
      <a class="btn btn-secondary" href="sector.php" role="button">Registrar sector <i class="fas fa-atlas"></i></a>
      <a class="btn btn-dark" href="versectoreconomico.php" role="button">Ver Sector Económico <i class="fab fa-black-tie"></i></a>
      <a class="btn btn-warning" href="versector.php" role="button">Ver Sector <i class="fas fa-book-open"></i></a>
      <br>
      <br>
      <a class="btn btn-success" href="verestablecimiento.php" role="button">Ver establecimiento <i class="fas fa-briefcase"></i></a>
      <a class="btn btn-danger" href="cierre.php" role="button">Cerrar sesión <i class="fas fa-power-off"></i></a>
      <br><br>
    <center>
    <div class="card text-center" style="width: 80rem;">
      <div class="card-header">
        Ingrese el establecimiento
      </div>
                <!-- Default form contact -->
         <form class="text-center border border-light p-5" action="registrarestablecimiento.php" method="post">

             <p class="h4 mb-4">Registrar establecimiento</p>


             <!-- sector -->
             <label>Descripción establecimiento</label>
             <div class="form-group">
                 <textarea class="form-control rounded-0"  rows="3" placeholder="Describe el establecimiento" name="establecimiento"></textarea>
             </div>
             <br>


               <!-- Send button -->
             <center><button class="btn btn-info btn-block" type="submit">Registrar</button></center>

         </form>
         <!-- Default form contact -->

        <center><a class="btn btn-primary" href="adminmenu.php" role="button">Menú principal <i class="fas fa-home"></i></a></center>
        <br>
      </div>
    </div></center>
    <br><br><br>
    <div class="card-footer text-muted" >
      Todos los usuarios de nuestros servicios sujeta a la Declaración de Privacidad y acepta que quedará vinculado por los Términos de Servicio.
      Por favor revise estos documentos
      © 2020 APP COVID Related Services Company, Inc.
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
