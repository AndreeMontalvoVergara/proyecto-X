<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
</head>
<body>
<?php 

include("https://storage.cloud.google.com/proyecto03/Controlador/con_db.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['email']) >= 1) {
	    $usuario = trim($_POST['usuario']);
	    $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos( usuario, email, contraseña, direccion, telefono, fecha_reg) VALUES ('$usuario','$email', '$contraseña', '$direccion', '$telefono', '$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
</body>
</html>