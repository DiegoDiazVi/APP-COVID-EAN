<!DOCTYPE html>
<html>
<title>Registarse</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="imagen/icon.png" rel="icon" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/registrarse.css">
</head>

  <body>

  <center>
    <img src="imagen/ean.png" width="230" height="130">
    <form action="appregistrar.php" method="post" >
      <div class="container" style=" width: 30rem;">
        <h1>REGISTRARSE</h1>
        <p>Por favor completa los datos</p>
        <hr>

        <label for="documento"><b>Documento</b></label>
        <input type="number" class="form-control" placeholder="Ingresa documento" name="documento" min="1" max="2000000000" required>
        <label for="tdocumento"><b>Tipo de documento</b></label>
        <select  class="form-control" name="tdocumento" required="">
          <option selected> Seleccione Documento</option>
          <option value="1">Cedula de ciudadania</option>
          <option value="2">Cedula extranjera</option>
          <option value="3">Tarjeta de identidad</option>
        </select>

        <label for="nombre"><b>Nombre</b></label>
        <input type="text" class="form-control" placeholder="Ingrese nombre" name="nombre" required>

        <label for="apellp"><b>Apellido paterno</b></label>
        <input type="text" class="form-control" placeholder="Ingrese apellido" name="apellp" required>

        <label for="apellm"><b>Apellido materno</b></label>
        <input type="text" class="form-control" placeholder="Ingrese apellido" name="apellm" required>

        <label for="email"><b>Email</b></label>
        <input type="email" class="form-control" placeholder="Enter Email" name="email" required>

        <label for="celular"><b>Celular</b></label>
        <input type="number" class="form-control" placeholder="Ingresa numero de celular" name="celular" min="1" max="4000000000" required>
        <br>

        <label for="usuario"><b>Usuario</b></label>
        <input type="text" class="form-control" placeholder="Ingrese usuario" name="usuario" required>

        <label for="password"><b>Contraseña</b></label>
        <input type="password" class="form-control" placeholder="Ingresa contraseña" name="password" required>

        <label for="rpassword"><b>Repetir contraseña</b></label>
        <input type="password" class="form-control" placeholder="Repite contraseña" name="rpassword" required>


        <p>Al crear una cuenta, usted acepta nuestro <a href="#" style="color:dodgerblue">Terminos & condiciones</a>.</p>

        <div class="clearfix">
          <button type="button" class="cancelbtn"><a href="index.php">Cancelar</a></button>
          <button type="submit" class="signupbtn">Registarse</button>
        </div>
      </div>
    </form></center>
  </body>
</html>
