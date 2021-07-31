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
    <title>Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="img/favicon.png" rel="icon" type="image/x-icon">
    <script src="https://kit.fontawesome.com/163b70c708.js" crossorigin="anonymous"></script>
  </head>
  <style media="screen">
  #body{
      background: url(img/fondo.jpg);
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
    <img src="imagen/logo3.png" width="130" height="130">


      <br>
      <center>
        <a class="btn btn-primary" href="admin.php" role="button">Ver usuarios <i class="fas fa-pen-fancy"></i></a>
      <a class="btn btn-danger" href="cierre.php" role="button">Cerrar sesión <i class="far fa-times-circle"></i></a>
      </center>
      <br>
      <center>
      <div class="card text-center" style="width: 80rem;">
        <div class="card-header">
          Consultar usuarios
        </div>
        <div class="card-body">
      <br>
      <h2 id="titulo">USUARIOS <i class="fas fa-user-alt"></i></h2>
      <center>
      <table class="table" style="width: 60rem;">
        <thead class="thead-dark">

            </center>
      </table>
      <br>


    </div>
      <div class="card-footer text-muted">
        Todos los usuarios de nuestros servicios sujeta a la Declaración de Privacidad y acepta que quedará vinculado por los Términos de Servicio.
        Por favor revise estos documentos
        © 2020 APPCOVID Related Services Company, Inc.
      </div>
    </div>
  </center>
  <br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
