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
    <title>Actualizar sector</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="imagen/icon.png" rel="icon" type="image/x-icon">
    <script src="https://kit.fontawesome.com/163b70c708.js" crossorigin="anonymous"></script>
  </head>
  <style media="screen">
  #body{
      background: url(imagen/fondo2.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;

  }
  #titulo{
      text-align: center;
      color: #000000;
  }
  </style>
  <body id="body">
    <img src="imagen/ean.png" width="230" height="130">
    <img src="imagen/logo3.png" width="130" height="130">
    <br><br>
      <center>
      <a class="btn btn-primary" href="adminmenu.php" role="button">Menú principal <i class="fas fa-home"></i></a>
      <a class="btn btn-danger" href="cierre.php" role="button">Cerrar sesión <i class="far fa-times-circle"></i></a>
      </center>
      <br>
      <h2 id="titulo">EDITAR USUARIOS <i class="fas fa-user-alt"></i></h2>

      <?php
         extract($_GET);
         require("appconexion.php");

         $id= $_GET["id"];
         $sql= "SELECT * FROM sector  WHERE idsector=$id";
         $ressql = mysqli_query($mysqli,$sql);
         while ($row = mysqli_fetch_row ($ressql)){
               $id = $row[0];
               $sector = $row[1];
               $idsectorecono= $row[2];




             }
         ?>
       <center>
      <form action="updatesector.php" method="post" style="width: 60rem;">
         <div class="form-row">
           <div class="form-group col-md-6">
             <label for="id">ID SECTOR</label>
             <input type="text" class="form-control" name="id" value= "<?php echo $id ?>" readonly="readonly">
           </div>
           <div class="form-group col-md-6">
             <label for="idsectorecono">ID SECTOR ECONÓMICO</label>
             <input type="text" class="form-control" name="idsectorecono" value= "<?php echo $idsectorecono?>">
           </div>
         </div>
         <div class="form-group">
           <label for="sector">SECTOR</label>
             <input type="text" class="form-control" name="sector" value="<?php echo $sector?>">
         </div>

         <button type="submit" class="btn btn-success">Actualizar</button>

         <br>
         <br>
         <br>
         <br>
       </form>
     </center>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
