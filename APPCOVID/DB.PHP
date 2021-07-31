<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appcovid";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$tpropuesta= $_POST["tipopropuesta"];
$propuesta= $_POST["propuesta"];
$operacion= $_POST["operacion"];
$fecha = date("Y-m-d");


$sql1="SELECT * FROM propuesta";
$ressql=mysqli_query($conn,$sql1);
$row=mysqli_fetch_row ($ressql);
$idpropuesta=$row[0];



#insercion de datos a la DB en la tabla persona
$sql2="INSERT INTO propuesta (descripcion,tipopropuesta,fecharegistro,estado,EST_idest)
VALUES('$propuesta','$tpropuesta','$fecha','1','1')";

$sql3="INSERT INTO plan_operacion (idplan,plan,PROPUESTA_idpropuesta,ACTIVIDAD_idactividad)
VALUES('$operacion','$idpropuesta','1')";

if (mysqli_query($conn, $sql1)|| mysqli_query($conn,$sql2, $sql3)){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql1, $sql2, $sql3 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
