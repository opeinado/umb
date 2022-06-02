<?php

$codigo = $_POST['codigo'];
$contraseña = $_POST['contraseña'];

session_start();
$_SESSION['codigo']=$codigo;

include ('dn.php');

$consulta = "SELECT*FROM usuarios WHERE codigo ='$codigo' AND contraseña='$contraseña'";
$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    header("location:../../../../umb");

}else {
    
    include("IndexLogin.php");
    ?>
    <h1>ERROR EN LA AUTETICACION</h1>
    
    <?PHP

}
mysqli_free_result($resultado);
mysqli_close($conexion);