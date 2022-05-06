<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$conex = mysqli_connect("localhost","root","","registro"); 

$consulta="SELECT*FROM datos where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:https://storage.cloud.google.com/proyecto03/Modelo/index.html");
    
}else{
    ?>
    <?php
    include("https://storage.cloud.google.com/proyecto03/Modelo/login.html");
    ?>
    <h3 class="bad">ERROR EN LA AUTENTICACION!</h3>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);
 
