<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","","logeo");
$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña' ";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas)
{
header("location:home.php");
}else{
?>
<?php
include("index.html");
?>
<h1> error de autentificacion</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
