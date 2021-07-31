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
     <title>Registrar propuesta</title>
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
     <center>
       <a class="btn btn-warning" href="aportes.php" role="button">Aportes <i class="fas fa-edit"></i></a>
       <a class="btn btn-success" href="consultas.php" role="button">Consultas <i class="fas fa-search"></i></a>
       <a class="btn btn-danger" href="cierre.php" role="button">Cerrar sesión <i class="fas fa-power-off"></i></a>

     <br><br>
     <center>
     <div class="card text-center" style="width: 80rem;">
       <div class="card-header">
         Ingrese su propuesta
       </div>
                 <!-- Default form contact -->
          <form class="text-center border border-light p-5" action="registrarpropuesta.php" method="post">

              <p class="h4 mb-4">Propuesta</p>

              <!-- tipo -->
              <label>Tipo propuesta</label>
              <select class="browser-default custom-select mb-4" name="tipopropuesta" >
                  <option selected disabled>Selecciona una opcion</option>
                  <option value="Economica">Económica</option>
                  <option value="Social">Social</option>
                  <option value="Ambiental">Ambiental</option>
                  <option value="Cultural">Cultural</option>
              </select>

              <!-- tipo -->
              <label>Sector</label>
              <select class="browser-default custom-select mb-4" name="sector" >
                  <option selected disabled>Selecciona una opcion</option>
                  <option value="1">Taxis</option>
                  <option value="2">Apps moviles de transporte</option>
                  <option value="3">Aviones</option>
                  <option value="4">Buses - Sitp - Transmilenio</option>
                  <option value="5">Bancos</option>
                  <option value="6">Cooperativas</option>
                  <option value="7">Compañias de financiamiento</option>
                  <option value="8">Creditos educativos</option>
                  <option value="9">Comercio mayorista</option>
                  <option value="10">Comercio minorista</option>
                  <option value="11">Comercio informal</option>
                  <option value="12">	Retail</option>
                  <option value="13">Edificaciones</option>
                  <option value="14">Obras publicas</option>
                  <option value="15">Remodelaciones</option>
                  <option value="16">Agrupaciones residenciales</option>
                  <option value="17">Gas domiciliario</option>
                  <option value="18">Mineria</option>
                  <option value="19">Productos quimicos</option>
                  <option value="20">Provedores de internet y telefono</option>
                  <option value="21">Centros de atencion de operadores en colombia</option>
                  <option value="22">Venta de tecnologia en grandes superficies</option>
                  <option value="23">Venta de tecnologia en pequeñas superficies</option>
                  <option value="24">Cultivos de frutas y verduras</option>
                  <option value="25">Automoviles y motos</option>
                  <option value="26">Ropa</option>
                  <option value="27">Manofactcura</option>
                  <option value="28">Empresas</option>
                  <option value="29">Micro-empresas</option>
                  <option value="30">Hoteles</option>
                  <option value="31">Restaurantes</option>
                  <option value="32">Parques tematicos</option>
                  <option value="33">Aeropuertos - terminales</option>
                  <option value="34">Cines</option>
                  <option value="35">Museos</option>
                  <option value="36">Estadios</option>
                  <option value="37">Teatro</option>
              </select>




              <!-- establecimiento  -->
              <label>Establecimiento</label>
              <div class="form-group">
                  <textarea class="form-control rounded-0" style="text-transform:uppercase;" rows="3" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="ingresa establecimiento" name="establecimiento"></textarea>
              </div>
              <br>

              <!-- propuesta  -->
              <label>Descripción propuesta</label>
              <div class="form-group">
                  <textarea class="form-control rounded-0" rows="3" placeholder="Describe la propuesta" name="propuesta"></textarea>
              </div>
              <br>
              <!-- plan operacion  -->
              <label>Plan operacion</label>
              <div class="form-group">
                  <textarea class="form-control rounded-0"  rows="3" placeholder="Describe el plan operacion" name="operacion"></textarea>
              </div>
              <br>
              <!-- Actividades  -->
              <label>Actividades</label>
              <div class="form-group">
                  <textarea class="form-control rounded-0"  rows="3" placeholder="Describe las actividades" name="actividad"></textarea>
              </div>
              <br>

                <!-- Send button -->
              <center><button class="btn btn-info btn-block" type="submit">Registrar</button></center>

          </form>
          <!-- Default form contact -->

         <center><a class="btn btn-primary" href="menu.php" role="button">Menú principal <i class="fas fa-home"></i></a></center>
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
