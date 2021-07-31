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
    <title>Aportes</title>
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
  #titulo{
      text-align: center;
      color: #1585EF;
  }
  #fieldset{
          border: inset 8px #1585EF;
          background: #ECECEC;
          width:625px;
          height:330px;
          border-radius:10px 10px 10px 10px;
          margin:5px 370px;
  }
  #a{
    margin:5px 20px;
  }
  </style>
  <body id="body">
    <img src="imagen/ean2.png" width="230" height="130">
    <img src="imagen/logo3.png" width="130" height="130">
    <center>
    <a class="btn btn-primary" href="propuesta.php" role="button">Registrar propuesta <i class="fas fa-pen-fancy"></i></a>
    <a class="btn btn-success" href="consultas.php" role="button">Consultas <i class="fas fa-search"></i></a>
    <a class="btn btn-danger" href="cierre.php" role="button">Cerrar sesión <i class="fas fa-power-off"></i></a>
    </center>
    <br>
    <fieldset id="fieldset">
    <h2 id="titulo">APORTES <i class="fas fa-edit"></i></h2>
      <center>
      <form action="registroaporte.php" method="post" style="width: 20rem;">
        <div class="form-group" >
          <label for="referencia">N° de radicado</label>
          <input type="text" class="form-control" placeholder="Ingrese el numero de radicado" name="radicado" required>
        </div>
        <label>Aporte a la propuesta</label>
        <div class="form-group">
            <textarea class="form-control rounded-0"  rows="3" placeholder="Aporte a la propuesta" name="aporte"></textarea>
        </div>
        <button type="submit" class="btn btn-success">CONFIRMAR <i class="far fa-arrow-alt-circle-right"></i></button>
        <br>
        <br>
      </form>
    </center>
    <a class="btn btn-primary" href="menu.php" role="button" id="a">Menú principal <i class="fas fa-home"></i></a>
    </fieldset>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
