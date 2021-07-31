<?php

session_start();
	require("appconexion.php");

	$usuario=$_POST['usuario'];
	$pass=md5($_POST['password']);


	$sql2=mysqli_query($mysqli,"SELECT * FROM persona WHERE usuario ='$usuario'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['identificacion']=$f2['identificacion'];
			$_SESSION['usuario']=$f2['usuario'];
			$_SESSION['rol']=$f2['rol'];
			echo '<script>alert("BIENVENIDO  ADMINISTRADOR")</script> ';
			echo "<script>location.href='adminmenu.php'</script>";

			}
	}
			$sql=mysqli_query($mysqli,"SELECT * FROM persona WHERE usuario='$usuario'");
			if($f=mysqli_fetch_assoc($sql)){
			if($pass==$f['password'] ){
			$_SESSION['identificacion']=$f['identificacion'];
			$_SESSION['usuario']=$f['usuario'];
			$_SESSION['rol']=$f['rol'];

	echo '<script>alert("BIENVENIDO USUARIO")</script> ';
	echo "<script>location.href='menu.php'</script>";
		}else{

		echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		echo "<script>location.href='login.php'</script>";
		}
	}else{

		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		echo "<script>location.href='registrar.php'</script>";
	}

?>
