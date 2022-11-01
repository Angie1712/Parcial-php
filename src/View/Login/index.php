
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<title> LOGIN  </title>
		<!-- CSS -->
		<link rel="stylesheet" href="../../Assets/css/style.css">
</head>
	<body>
<!-- CONTENIDO DEL FORMULARIO -->
	<form action="Login.php" method="POST">
		<section class="form-login">
			<h5>INGRESO</h5>
			<label for="dni">USUARIO: </label>
			<input class="controls" type="text" name="username" placeholder="USUARIO">
			<!-- Contraseña -->
			<label> CONTRASEÑA: </label>
			<input class="controls" type="password" name="pass" placeholder="CONTRASEÑA">
			<!-- BOTON PARA EL ENVIO DE DATOS -->
			<input class="buttons" type="submit" value="Enviar">
			<?php 
			if (isset($_GET['valid'])){
			echo "<span style='color:red'><strong> Usuario o Contraseña invalida</strong> </span>";
			}
?>
			</form>
	</body>
</html>
