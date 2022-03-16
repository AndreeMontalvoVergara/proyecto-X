<?php 

include("con_db.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['name']) != 0 && strlen($_POST['email']) != 0) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$contrasena = trim($_POST['contrasena']);
		$direccion = trim($_POST['direccion']);
		$telefono = trim($_POST['telefono']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, contrasena, direccion, telefono, fecha_reg) VALUES ('$name','$email', '$contrasena', '$direccion', '$telefono', '$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has Suscrito correctamente!</h3>
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