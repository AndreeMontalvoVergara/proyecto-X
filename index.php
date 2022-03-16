<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form action="" method="POST">
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="password" name="contrasena" placeholder="contrasena">
		<input type="direccion" name="direccion" placeholder="direccion">
		<input type="telefono" name="telefono" placeholder="telefono">
    	<input type="submit" name="registrar"> 
		<div>
			<br>
			<br>
    <Spam><a href="login.php">Iniciar sesion</a></Spam>

		</div>
</form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>