<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="https://storage.cloud.google.com/proyecto03/Vista%20/estilo.css">
</head>
<body>
    <form method="POST">
    	<h1>¡Suscribete!</h1> 
    	<input type="text" name="usuario" placeholder="Nombre Usuario">
    	<input type="email" name="email" placeholder="Correo Electronico">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="direccion" name="direccion" placeholder="Direccion">
        <input type="telefono" name="telefono" placeholder="Telefono">
    	<input type="submit" name="registrar">
        <br>
        <br>
        <span> <a href="https://storage.cloud.google.com/proyecto03/Modelo/login.html">Iniciar sesion</a> </span>
    </form>
        <?php 
        include("https://storage.cloud.google.com/proyecto03/Controlador/registrar.php");
        ?>
</body>
</html>